<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Souscriptions Model
 *
 * @property \App\Model\Table\OffresTable&\Cake\ORM\Association\BelongsTo $Offres
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 *
 * @method \App\Model\Entity\Souscription get($primaryKey, $options = [])
 * @method \App\Model\Entity\Souscription newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Souscription[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Souscription|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Souscription saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Souscription patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Souscription[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Souscription findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SouscriptionsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('souscriptions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Offres', [
            'foreignKey' => 'offre_id',
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['offre_id'], 'Offres'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }
}
