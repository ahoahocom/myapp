<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Songs Controller
 *
 * @property \App\Model\Table\SongsTable $Songs
 */
class SongsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $songs = $this->paginate($this->Songs);

        $this->set(compact('songs'));
        $this->set('_serialize', ['songs']);
    }

    public function search(){
      $songs = [];
      if($this->request->is('post')){
        $find = $this->request->data['find'];
        $songs = $this->Songs->find()
        ->where(["title like " => '%'.$find.'%']);
      }
      $this->set('songs', $songs);
    }

    /**
     * View method
     *
     * @param string|null $id Song id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $song = $this->Songs->get($id, [
            'contain' => []
        ]);

        $this->set('song', $song);
        $this->set('_serialize', ['song']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $song = $this->Songs->newEntity();
        if ($this->request->is('post')) {
            $song = $this->Songs->patchEntity($song, $this->request->data);
            if ($this->Songs->save($song)) {
                $this->Flash->success(__('The song has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The song could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('song'));
        $this->set('_serialize', ['song']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Song id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $song = $this->Songs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $song = $this->Songs->patchEntity($song, $this->request->data);
            if ($this->Songs->save($song)) {
                $this->Flash->success(__('The song has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The song could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('song'));
        $this->set('_serialize', ['song']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Song id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $song = $this->Songs->get($id);
        if ($this->Songs->delete($song)) {
            $this->Flash->success(__('The song has been deleted.'));
        } else {
            $this->Flash->error(__('The song could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
