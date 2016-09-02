<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * NearbySchools cell
 */
class NearbySchoolsCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display( $provinceId = 0, $currentSchoolId = 0)
    {
        $this->loadModel('Schools');

        // is this school part of a chain, if so, set the chain id and filter out
        $chainData = $this->Schools->find('all', [ 'contain' => ['Chains'], 'fields' => ['Chains.name', 'Chains.id'] ] )
            ->where( ['Schools.id' => $currentSchoolId] )->first();     
          
        $chainId = false;    
        if ( !empty( $chainData->Chains->id ) ) {
            $chainId = $chainData->Chains->id;
        } 

        $schools = $this->Schools->find('all', [ 
            'fields' => [ 'name', 'slug' ] ] )
            ->contain([ 'Cities' => [ 'Provinces' => [ 'conditions' => [ 'Provinces.id' => $provinceId ] ] 
             ] ] )
            ->where(['Schools.id !=' => $currentSchoolId ] )
            ->order('Schools.name desc')
            ->limit(5);

        if ( $chainId) {
            $schools->where( ['Schools.chain_id !=' => $chainId ] );
        }    

        if ( $provinceId == 0) {
            $schools = $this->Schools->find('all', [ 
                'fields' => [ 'name', 'slug' ] ] )
                //->where(['Schools.id !=' => $currentSchoolId ] )
                ->order('Schools.created desc')
                ->limit(5);
                
        }    

        $this->set('relatedSchools',  $schools );   


        // also set chain locations if this is a chain
        if ( $chainId ) {
            $chainName = $chainData->Chains->name; 

            // find all the schools where chainid = x, get the city names for that school, get the slug for the school

            $schools = $this->Schools->find('all', [ 'fields' => [ 'Schools.slug', 'Cities.name' ] ] )
                ->contain('Cities')
                ->where( ['Schools.id !=' => $currentSchoolId , 'Schools.chain_id' => $chainId ]  )
                ->order('Cities.name');

            $this->set('chainName', $chainName );    
            $this->set('chainSchools',  $schools );     
                 
        } else {
            $this->set('chainName', false );
            $this->set('chainSchools', false); 
        }


    }
}
