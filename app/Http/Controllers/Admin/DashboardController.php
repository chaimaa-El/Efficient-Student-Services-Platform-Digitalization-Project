<?php

namespace App\Http\Controllers\Admin;
use App\Models\attesAbsence;
use App\Models\resEspace;
use App\Models\demStage;
use App\Models\resTerrain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\history;
use Illuminate\Support\Facades\Mail;
use PDF;

class DashboardController extends Controller
{
    public function index()
    {    
        $demande=attesAbsence::all();
        $demande1=resEspace::all();
        $demande2=resTerrain::all();
        $demande3=demStage::all();
        $result = DB::Table('attesAbsenceHistory')->select('id','typeDocumnt','created_at','Nom_Etudiant','Prenom_Etudiant','Niveau','CNE')->get(); 
        $result1 = DB::Table('dem_stagehistory')->select('id','typeDocumnt','created_at','Nom_Etudiant','Prenom_Etudiant','CNE')->get(); 
        $result2 = DB::Table('res_espacehistory')->select('id','typeDocumnt','created_at','Nom_Representant','Niveau_Representant','CNE_Representant')->get(); 
        $result3 = DB::Table('res_terrainshistory')->select('id','typeDocumnt','created_at','Nom_Representant','Niveau_Representant','CNE_Representant')->get(); 
        return view('admin.dashboard')
           ->with('demande',$demande)->with('demande2',$demande2)->with('demande3',$demande3)->with('demande1',$demande1)->with('result',$result)
           ->with('result1',$result1)
           ->with('result2',$result2)
           ->with('result3',$result3)
        ;
             
    }


    public function history($id)
    {
        $contact = attesAbsence::find($id);
        $history = DB::table('attesAbsenceHistory')->insert(
            [
            'Nom_Etudiant'=>$contact->Nom_Etudiant
            ,'Prenom_Etudiant'=>$contact->Prenom_Etudiant
            ,'CNE'=>$contact->CNE
            ,'Niveau'=>$contact->Niveau
            	
            ,'Filière'=>$contact->Filière
            ,'created_at'=>$contact->created_at
            	,'updated_at'=>$contact->updated_at
                ,'typeDocumnt'=>	$contact->typeDocumnt	]);
               
       
        attesAbsence::destroy($id);
        return redirect('/demandes');  
    }
    public function history1($id)
    {
        $contact1 = resEspace::find($id);
        $mail=$contact1->Email_Representant;
        $name=$contact1->Nom_Representant;
        $history1 = DB::table('res_espacehistory')->insert(
            [
            'Nom_Representant'=>$contact1->Nom_Representant
            ,'CNE_Representant'=>$contact1->CNE_Representant
            ,'Niveau_Representant'=>$contact1->Niveau_Representant
            ,'Email_Representant'=>$contact1->Email_Representant
            ,'Téléphone_Representant'=>$contact1->Téléphone_Representant
            ,'Event'=>$contact1->Event
            	,'Date'=>$contact1->Date
                ,'Durée'=>	$contact1->Durée
                ,'Public'=>	$contact1->Public
                ,'Espace'=>	$contact1->Espace
                ,'Equipements'=>	$contact1->Equipements
                ,'created_at'=>	$contact1->created_at
                ,'updated_at'=>	$contact1->updated_at
                ,'typeDocumnt'=>	$contact1->typeDocumnt]);
                resEspace::destroy($id);
                Mail::raw('Bonjour Votre demande a été acceptée, veuillez retourner pour la récupérer', function ($message) use ($mail,$name){
                    $message->from('elargoubi.chaimaa@ensam-casa.ma', 'Chaimaa');
                    $message->to($mail, $name);
                    
                });



        return redirect('/demandes');  
    }
    public function history2($id)
    {
        $contact2 = resTerrain::find($id);
        $mail=$contact2->Email_Representant;
        $name=$contact2->Nom_Representant;
        $history2 = DB::table('res_terrainshistory')->insert(
            [
            'Nom_Representant'=>$contact2->Nom_Representant
            ,'CNE_Representant'=>$contact2->CNE_Representant
            ,'Niveau_Representant'=>$contact2->Niveau_Representant
            ,'Email_Representant'=>$contact2->Email_Representant
            	
            ,'Téléphone_Representant'=>$contact2->Téléphone_Representant
           
            	,'Date'=>$contact2->Date
                ,'Horaires'=>	$contact2->Horaires
          
                ,'created_at'=>	$contact2->created_at
                ,'updated_at'=>	$contact2->updated_at
                ,'typeDocumnt'=>	$contact2->typeDocumnt		]);
                resTerrain::destroy($id);


                Mail::raw('Bonjour Votre demande a été acceptée, veuillez retourner pour la récupérer', function ($message) use ($mail,$name){
                    $message->from('elargoubi.chaimaa@ensam-casa.ma', 'Chaimaa');
                    $message->to($mail, $name);   });

        return redirect('/demandes');  
    }
    public function history3($id)
    {
        $contact3 = demStage::find($id);
        $mail=$contact3->Email;
        $name=$contact3->Nom_Etudiant;
        $history3 = DB::table('dem_stagehistory')->insert(
            [
            'Nom_Etudiant'=>$contact3->Nom_Etudiant
            ,'Prenom_Etudiant'=>$contact3->Prenom_Etudiant
            ,'CNE'=>$contact3->CNE
           
            	
            ,'Filière'=>$contact3->Filière
            ,'Période'=>$contact3->Période
            ,'Email'=>$contact3->Email
            ,'Téléphone'=>$contact3->Téléphone
            ,'created_at'=>$contact3->created_at
            	,'updated_at'=>$contact3->updated_at
                ,'typeDocumnt'=>	$contact3->typeDocumnt	]);

                Mail::raw('Bonjour Votre demande a été acceptée, veuillez retourner pour la récupérer', function ($message) use ($mail,$name){
                    $message->from('elargoubi.chaimaa@ensam-casa.ma', 'Chaimaa');
                    $message->to($mail, $name);
                });


                demStage::destroy($id);
        return redirect('/demandes');  
   
 }

 public function visualiser2($id){
    
    $item8= resTerrain::find($id);
    $pdf =PDF::loadView('admin.infosup',compact('item8'))->setOptions(['defaultFont' => 'sans-serif']);
    ;
    view()->share('item8',$item8);
    /*$res3= resTerrain::find($id);*/
    
    /*return view('admin.infosup') ->with('item8',$item8)*/
    return $pdf->download($item8->Nom_Representant.'_'.$item8->typeDocumnt.'.pdf');
    ;
}
public function visualiser3($id){
    
    $item9= demStage::find($id);
    $pdf =PDF::loadView('admin.infosup',compact('item9'))->setOptions(['defaultFont' => 'sans-serif']);
    
    view()->share('item9',$item9);
   
    return $pdf->download($item9->Nom_Etudiant.' '.$item9->Prenom_Etudiant.'_'.$item9->typeDocumnt.'.pdf');
   
}
public function visualiser1($id){
    
    $item7=  resEspace::find($id);
    $pdf =PDF::loadView('admin.infosup',compact('item7'))->setOptions(['defaultFont' => 'sans-serif']);
    
    view()->share('item7',$item7);
   
    return $pdf->download($item7->Nom_Representant.'_'.$item7->typeDocumnt.'.pdf');
   
}
public function visualiser($id){
    
    $item6=  attesAbsence::find($id);
    $pdf =PDF::loadView('admin.infosup',compact('item6'))->setOptions(['defaultFont' => 'sans-serif']);
    
    view()->share('item6',$item6);
   
    return $pdf->download($item6->Nom_Etudiant.' '.$item6->Prenom_Etudiant.'_'.$item6->typeDocumnt.'.pdf');
   
}


}

