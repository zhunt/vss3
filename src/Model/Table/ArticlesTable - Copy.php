<?php
namespace App\Model\Table;

use App\Model\Entity\Article;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 */
class ArticlesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('articles');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');

        $this->addBehavior('Muffin/Tags.Tag');
        
        $this->addBehavior('Muffin/Slug.Slug', [
            // Optionally define your custom options here (see Configuration)
          ]);        

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        
        $this->belongsTo('ImageUploads', [
            'foreignKey' => 'feature_image_id'
        ]);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->requirePresence('slug', 'update')
            ->allowEmpty('slug', 'create')
            ->requirePresence('seo_title', 'create')
            ->notEmpty('seo_title')
            ->requirePresence('seo_desc', 'create')
            ->notEmpty('seo_desc')
            ->requirePresence('body', 'create')
            ->notEmpty('body')
            ->add('flag_html', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_html', 'create')
            ->notEmpty('flag_html')
            ->add('flag_featured', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_featured', 'create')
            ->notEmpty('flag_featured')
            ->allowEmpty('feature_text');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['feature_image_id'], 'ImageUploads'));
        return $rules;
    }
}
