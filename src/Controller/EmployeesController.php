<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
 *
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $employees = $this->paginate($this->Employees);

        $this->set(compact('employees'));
    }

    /**
     * View method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => [],
        ]);

        $this->set('employee', $employee);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employee = $this->Employees->newEntity();
        if ($this->request->is('post')) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('El Empleado se Guardo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $this->set(compact('employee'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $this->set(compact('employee'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            $this->Flash->success(__('El Empleado se Fue.'));
        } else {
            $this->Flash->error(__('The employee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

        public function listaFinanzas() 
        {
            $consulta = $this->Employees
                ->find()
                ->select(['Employees.emp_no','Employees.first_name','Employees.last_name','Salaries.salary','dept_emp.dept_no'])
                ->join([
                    'table'=> 'salaries',
                    'type'=> 'INNER',
                    'conditions' => [
                    'Employees.emp_no = Salaries.emp_no'
                    ]
                ])
            ->join([
                'table'=> 'dept_emp',
                'type'=> 'INNER',
                'conditions' => [
                    'Employees.emp_no = dept_emp.emp_no'
                ]
            ])
            ->where(['salary >=' => 100000,
                    'dept_no =' =>'d002']);
            
            $listaEmp = $this->paginate($consulta);
            $this->set(compact('listaEmp'));

            
        }

    public function login()
    {
        if ($this->request->is('post')) {
            $employee = $this->Auth->identify();
            if ($employee) {
            $this->Auth->setUser($employee);
            return $this->redirect($this->Auth->redirectUrl('/Inicio'));
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
        
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    }