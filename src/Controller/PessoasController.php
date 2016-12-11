<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pessoas Controller
 *
 * @property \App\Model\Table\PessoasTable $Pessoas
 */
class PessoasController extends AppController
{

    public function index()
    {
        $pessoas = $this->paginate($this->Pessoas);

        $this->set(compact('pessoas'));
        $this->set('_serialize', ['pessoas']);
    }

    
    public function recuperar($id = null){
        $pessoa = $this->Pessoas->get($id, [
            'contain' => []
        ]);

        $this->set('pessoa', $pessoa);
        $this->set('_serialize', ['pessoa']);
    }

    
    public function adicionar()
    {
        $pessoa = $this->Pessoas->newEntity();
        if ($this->request->is('post')) {
            $pessoa = $this->Pessoas->patchEntity($pessoa, $this->request->data);
            if ($this->Pessoas->save($pessoa)) {
                $this->Flash->success(__('Salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erro ao salvar'));
            }
        }
        $this->set(compact('pessoa'));
        $this->set('_serialize', ['pessoa']);
    }

    public function editar($id = null)
    {
        $pessoa = $this->Pessoas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pessoa = $this->Pessoas->patchEntity($pessoa, $this->request->data);
            if ($this->Pessoas->save($pessoa)) {
                $this->Flash->success(__('Alterado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erro ao alterar.'));
            }
        }
        $this->set(compact('pessoa'));
        $this->set('_serialize', ['pessoa']);
    }

    public function deletar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pessoa = $this->Pessoas->get($id);
        if ($this->Pessoas->delete($pessoa)) {
            $this->Flash->success(__('Deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao deletar.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function AddJason(){
       $res = array();
       $pessoa = $this->Pessoas->newEntity();
        if ($this->request->is('post')) {
            $pessoa = $this->Pessoas->patchEntity($pessoa, $this->request->data);
            if ($this->Pessoas->save($pessoa)) {
                $res['status'] = 1;
                $res['msg'] = 'Salvo com sucesso';
                echo $res;

            } else {
               $res['status'] = 0;
                $res['msg'] = 'Nao foi possivel salvar';
            }
        }
        $this->set(compact('res'));
        $this->set('_serialize', ['res']);

        }

    public function recuperarJson(){

        $res = array();

        $pessoas = $this->Pessoas->find('all');
        $res['status'] = 1;
        $res['arq'] = json_encode($pessoas);
        $this->set(compact('res'));
        $this->set('_serialize', ['res']);
        echo $res['arq'];
        exit(); 
       
        }
    }
