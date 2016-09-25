<?php
namespace App\Model\Table;

use App\Model\Entity\City;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

use Cake\Database\Schema\Table as Schema;

/**
 * Cities Model
 */
class CitiesTable extends Table
{

    protected function _initializeSchema(Schema $schema)
    {
        $schema->columnType('geo_cords', 'point');
        return $schema;
    }

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('cities');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Muffin/Slug.Slug');

        $this->belongsTo('Provinces', [
            'foreignKey' => 'province_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);

        // left over from BartenderTraining?
        $this->hasMany('Schools', [
            'foreignKey' => 'city_id'
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
            ->allowEmpty('id', 'create');
            
       /* $validator
            ->requirePresence('slug', 'create')
            ->notEmpty('slug'); */
            
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            /*
        $validator
            ->add('flag_featured', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_featured', 'update')
            ->notEmpty('flag_featured');
            */

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
        $rules->add($rules->existsIn(['province_id'], 'Provinces'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        return $rules;
    }


    // methods

    public function updateCity(array $options) {
        $newCity = $options['name'];
        $provinceId = $options['province_id'];
        $countryId = $options['country_id'];
        $geoCords =  '43.653226, -79.383184'; // "43.6534199,-79.3899873"; // $options['geo_cords']; 

        debug($geoCords);

        $city = $this->findOrCreate([
            'name' => $newCity, 
            'country_id' => $countryId, 
            'province_id' => $provinceId,
            //'geo_cords' => '43.653226, -79.383184'
            ]); debug($city);

        return $city->id;
    }
}
