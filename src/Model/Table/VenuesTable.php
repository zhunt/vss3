<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Database\Schema\Table as Schema;

/**
 * Venues Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Provinces
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\BelongsTo $Cities
 * @property \Cake\ORM\Association\BelongsTo $Neighbourhoods
 * @property \Cake\ORM\Association\BelongsTo $EstablishmentTypes
 * @property \Cake\ORM\Association\BelongsTo $InsideVenues
 * @property \Cake\ORM\Association\BelongsToMany $Amenities
 * @property \Cake\ORM\Association\BelongsToMany $Cuisines
 * @property \Cake\ORM\Association\BelongsToMany $Features
 * @property \Cake\ORM\Association\BelongsToMany $VenuePhotos
 *
 * @method \App\Model\Entity\Venue get($primaryKey, $options = [])
 * @method \App\Model\Entity\Venue newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Venue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Venue|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Venue[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Venue findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VenuesTable extends Table
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

        $this->table('venues');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Muffin/Slug.Slug');

        $this->belongsTo('Provinces', [
            'foreignKey' => 'province_id'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id'
        ]);
        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id'
        ]);
        $this->belongsTo('Neighbourhoods', [
            'foreignKey' => 'neighbourhood_id'
        ]);
        $this->belongsTo('EstablishmentTypes', [
            'foreignKey' => 'establishment_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('InsideVenues', [
            'foreignKey' => 'id',
            'className' => 'Venues',
            'conditions' => ['InsideVenues.flag_mall' => true]
        ]);
        $this->belongsToMany('Amenities', [
            'foreignKey' => 'venue_id',
            'targetForeignKey' => 'amenity_id',
            'joinTable' => 'amenities_venues' // comment
        ]);
        $this->belongsToMany('Cuisines', [
            'foreignKey' => 'venue_id',
            'targetForeignKey' => 'cuisine_id',
            'joinTable' => 'cuisines_venues'
        ]);
        $this->belongsToMany('Features', [
            'foreignKey' => 'venue_id',
            'targetForeignKey' => 'feature_id',
            'joinTable' => 'features_venues'
        ]);
        $this->belongsToMany('VenuePhotos', [
            'foreignKey' => 'venue_id',
            'targetForeignKey' => 'venue_photo_id',
            'joinTable' => 'venue_photos_venues'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');
/*
        $validator
            ->requirePresence('slug', 'create')
            ->notEmpty('slug');

        $validator
            ->allowEmpty('seo_title');

        $validator
            ->allowEmpty('seo_desc');

        $validator
            ->requirePresence('page_url', 'create')
            ->notEmpty('page_url');

        $validator
            ->allowEmpty('description');

        $validator
            ->requirePresence('geo_cords', 'create')
            ->notEmpty('geo_cords');

        $validator
            ->boolean('flag_mall')
            ->requirePresence('flag_mall', 'create')
            ->notEmpty('flag_mall');

        $validator
            ->boolean('flag_closed')
            ->requirePresence('flag_closed', 'create')
            ->notEmpty('flag_closed');

        $validator
            ->boolean('flag_published')
            ->requirePresence('flag_published', 'create')
            ->notEmpty('flag_published');

        $validator
            ->allowEmpty('phone_1');

        $validator
            ->allowEmpty('phone_2');

        $validator
            ->allowEmpty('website_url');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('hours_sun');

        $validator
            ->allowEmpty('hours_mon');

        $validator
            ->allowEmpty('hours_tue');

        $validator
            ->allowEmpty('hours_wed');

        $validator
            ->allowEmpty('hours_thu');

        $validator
            ->allowEmpty('hours_fri');

        $validator
            ->allowEmpty('hours_sat');

        $validator
            ->allowEmpty('hours_holidays');

        $validator
            ->numeric('user_rating')
            ->allowEmpty('user_rating');

        $validator
            ->integer('user_votes')
            ->allowEmpty('user_votes');
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
        $rules->add($rules->existsIn(['city_id'], 'Cities'));
        $rules->add($rules->existsIn(['neighbourhood_id'], 'Neighbourhoods'));
        $rules->add($rules->existsIn(['establishment_type_id'], 'EstablishmentTypes'));
        $rules->add($rules->existsIn(['inside_venue_id'], 'InsideVenues'));

        return $rules;
    }
}
