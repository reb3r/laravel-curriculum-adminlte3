<?php

namespace App\Http\Controllers;

use App\TerminalObjective;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTerminalObjectiveRequest;
use App\Http\Requests\UpdateTerminalObjectiveRequest;
use DB;

class TerminalObjectiveController extends Controller
{
    
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTerminalObjectiveRequest $request)
    {
        
        $order_id = $this->getMaxOrderId(request('curriculum_id'), request('objective_type_id'));
        $terminalObjective = TerminalObjective::create(array_merge($request->all(), ['order_id' => $order_id]));
        
        if (request()->wantsJson()){    
            return ['message' => $terminalObjective->path()];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TerminalObjective  $terminalObjective
     * @return \Illuminate\Http\Response
     */
    public function show(TerminalObjective $terminalObjective)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TerminalObjective  $terminalObjective
     * @return \Illuminate\Http\Response
     */
    public function edit(TerminalObjective $terminalObjective)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TerminalObjective  $terminalObjective
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTerminalObjectiveRequest $request, TerminalObjective $terminalObjective)
    {
        //first get existing data to later adjust order_id
        $old_objective = TerminalObjective::find(request('id'));
        
        
        // update objective type
        if ($request->has('objective_type_id')){  
            $order_id = $this->getMaxOrderId(request('curriculum_id'), request('objective_type_id'));
            $request->request->add(['order_id' => $order_id]); 
            if ( ($terminalObjective->update($request->all()) == true) AND ($old_objective->order_id != request('order_id'))){
                $this->resetOrderIds($old_objective->curriculum_id, $old_objective->objective_type_id, $old_objective->order_id);
            }
            if (request()->wantsJson()){    
                return ['message' => '/curricula/'.$old_objective->curriculum_id];
            }
        }
        
        // update order_id
        if ($request->has('order_id')){ 
            if (request()->wantsJson()){    
                return ['message' => $this->toggleOrderId($old_objective, request('order_id')) ];
            }
        }
        
        // default    
        
        return $terminalObjective->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TerminalObjective  $terminalObjective
     * @return \Illuminate\Http\Response
     */
    public function destroy(TerminalObjective $terminalObjective)
    {
        
        abort_unless(\Gate::allows('objective_delete'), 403);
        
        //set temp vars
        $curriculum_id      = $terminalObjective->curiculum_id;
        $objective_type_id  = $terminalObjective->objective_type_id;
        $order_id           = $terminalObjective->order_id;
        
        
        //delete objective
        $return = $terminalObjective->delete();
        
        //reset order_ids
        $this->resetOrderIds($curriculum_id, $objective_type_id, $order_id);
    
        if (request()->wantsJson()){    
            return ['message' => $return];
        }
        return $return; 
    }
    
    
    protected function getMaxOrderId($curriculum_id, $objective_type_id) 
    {
        
        $order_id = DB::table('terminal_objectives')
                                ->where('curriculum_id', $curriculum_id)
                                ->where('objective_type_id', $objective_type_id)
                                ->max('order_id');
        
        return (is_numeric($order_id)) ? $order_id + 1 : 0 ;   
    }    
    
    protected function resetOrderIds($curriculum_id, $objective_type_id, $order_id, $direction = 'down')
    {
        return (new TerminalObjective)->where('curriculum_id', $curriculum_id)
                                      ->where('objective_type_id', $objective_type_id)
                                      ->where('order_id', '>', $order_id)
                                      ->update([
                                           'order_id'=> DB::raw('order_id'. ( ($direction === 'down') ? '-1' : '+1') )
                                      ]);
    }
    /**
     * 
     * @param int $curriculum_id
     * @param int $objective_type_id
     * @param int $order_id
     * @param int $new_order_id
     * @return type
     */
    protected function toggleOrderId($old_objective, $new_order_id)
    {
        // toggle order_ids of terminal objectives
        $responseA = (new TerminalObjective)->where('curriculum_id', $old_objective->curriculum_id)
                            ->where('objective_type_id', $old_objective->objective_type_id)
                            ->where('order_id', '=', $new_order_id)
                            ->update([ 'order_id'=> $old_objective->order_id ]);
       
        $responseB = (new TerminalObjective)->where('id', $old_objective->id)
                                ->update([ 'order_id'=> $new_order_id]);
        
        if (($responseA == true) AND ($responseB == true))
        {
            return '/curricula/'.$old_objective->curriculum_id;
        }
       
    }
    
   
    
    
}