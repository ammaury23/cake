<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controlador de Titles
 *
 * @property \App\Model\Table\TitlesTable $Titles
 *
 * @method \App\Model\Entity\Title[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TitlesController extends AppController
{

        /** 
     *  Metodo para inicializar el controlador
     * 
     * @return \Cake\Http\Response|null
     */
    public function initialize() 
    {
    parent::initialize();
    $this->loadModel('Employees');
    }

    /**
     * Metodo de la vista
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $titles = $this->paginate($this->Titles);

        $this->set(compact('titles'));
    }

    /**
     * Metodo para ver
     *
     * @param string|null $id Title id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null, $title = null, $from_date = null)
    {
        $title = $this->Titles->get([$id,$title,$from_date]);

        $this->set('title', $title);
    }

    /**
     * Metodo para agregar
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $title = $this->Titles->newEntity();
        if ($this->request->is('post')) {
            $title = $this->Titles->patchEntity($title, $this->request->getData());
            
            if ($this->Titles->save($title)) {
                $this->Flash->success(__('The title has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The title could not be saved. Please, try again.'));
        }
        $this->set(compact('title'));
    }

    /**
     * Metodo para editar
     *
     * @param string|null $id Id del título.
     * @param string|null $title Nombre del titulo.
     * @param string|null $from_date Fecha de titulo.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null,$title = null, $from_date = null)
    {
        //Se obtiene informacion del registro segun su llave primaria.
        $title = $this->Titles->get([$id,$title,$from_date]);
        
        //Se pregunta el tipo de petición.
        if ($this->request->is(['patch', 'post', 'put'])) {
            //Se crea una nueva entidad y se elimina la anterior, ya que si solo se hiciera el patchEntity, solo se guardarían los cambio de las columnas que sean PK.
            $newTitle = $this->Titles->newEntity();
            $this->Titles->delete($title);
            //Aqui se sobre escribe la entidad para que permita editar la llave primaria
            $newTitle = $this->Titles->patchEntity($newTitle, $this->request->getData());
            if ($this->Titles->save($newTitle)) {
                $this->Flash->success(__('The title has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            //Muestra mensaje de error 
            $this->Flash->error(__('El título no pudo ser guardado intenta de nuevo.'));
        }
        $this->set(compact('title'));
    }

    /**
     * Metdodo Para Eliminar
     *
     * @param string|null $id Id del título.
     * @param string|null $title Nombre del titulo.
     * @param string|null $from_date Fecha de titulo.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null,$title = null, $from_date = null)
    {
        //Restringimos peticiones que pueden llamar este metodo.
        $this->request->allowMethod(['post', 'delete']);
        //Se obtiene Informacion de un registro dependiendo de su llave primaria.
        $title = $this->Titles->get([$id,$title,$from_date]);
        //Sepregunta si se elimino de forma correcta.
        if ($this->Titles->delete($title)) {
            //Se muestra el mensaje de que todo funciono correctamente
            $this->Flash->success(__('El titulo fue borrado.'));
        } else {
            //Se muestra el mensaje de que no se pudo borrar el titulo solicitado.
            $this->Flash->error(__('El titulo no pudo ser borrado, Intenta nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /** 
     *  Metodo ver todos los titulos donde el empleado es mujer
     * 
     * @return \Cake\Http\Response|null
     */
    public function listaMujeres() 
    {
        //Se buscan todos los titulis que sean de empleados mujeres.
        $titles = $this->Titles->find()
        ->contain('Employees')
        ->where(['Employees.gender' => 'F']);
        //Se manda la informacion al componente para que sepa como mostrar los datos
        $titulosMujeres = $this->paginate($titles);
        //Se manda la informacion ya paginada a la vista.
        $this->set(compact('titulosMujeres'));
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
