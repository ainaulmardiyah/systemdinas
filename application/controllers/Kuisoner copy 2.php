<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Kuisoner extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	
		$ses = $this->load->library('session');
		
		$this->load->model('EmployeeModel', 'employee');
		$this->load->model('PertanyaanModel', 'kuisoner');
		$this->load->model('PoinjawabanModel', 'poinjawaban');
		$this->load->model('AnswerModel', 'answer');
		$this->load->model('AspekModel', 'aspek');
		$this->load->model('EntropyModel', 'entropy');
		$this->load->model('RankingModel', 'ranking');
	}

	public function index()
	{
	$max_pertanyaan= $this->kuisoner->maxkuisoner();
	$totalpertanyaan = $max_pertanyaan->row();
	$lq = $totalpertanyaan->lastquestion;
	$lastquestion=$lq+1;
	$id_staf = $this->session->iduserlogin;	
	$ep= $this->ranking->rankingall($id_staf);
	$rankingall= $ep->result();
	$id_simpan=1;
	$idnext=1;
	$kuisoner= $this->kuisoner->get($id_simpan);
	$poinjawaban= $this->poinjawaban->getkuis($id_simpan);
			$data = array(
				'header' => 'kuisoner',
				'kuisoner' => $kuisoner->result(),
				'poinjawaban' => $poinjawaban->result(),
				'id_pertanyaan' => $idnext,
				'lastquestion' => $lastquestion,
				'rankingall'	=>$rankingall,	
				
			);
			/*if(isset($_POST['NextQuestion'])) {
		
		$param = array(
			'id_aspek_answer' => $this->input->post('aspek'),
			'id_pertanyaan' => $id_simpan,
			'id_answer_choice' =>$this->input->post('id_data_answer'),
			'jumlah_jawaban_poin' =>$this->input->post('jumlah_poin'),
			'id_employee_q' => $id_staf,
			
		);*/
		//$id_data_answer = $this->inp$this->load->view('Kuisoner', $data);ut->post('id_data_answer');
		//$password = $this$this->load->view('Kuisoner', $data);->input->post('password');
		//$insertkuis = $this->answer->add($param);

		$this->load->view('Kuisoner', $data);
	//}
	//else{
	
	//	$this->load->view('Kuisoner', $data);
	//}
	} 
	public function nextquestion()
	{
		$gets=$this->uri->segment(3); 
		 $username = $this->session->username;
		$id_staf = $this->session->iduserlogin;	
		$entropivalidasi = $this->entropy->validasiquestion($gets, $id_staf);
		$entropivalidasione = $this->entropy->validasiperaspek($gets, $id_staf);
		$entropivalidasitwo = $this->entropy->validasiperaspeklast($gets, $id_staf);
		$validasikuisoner = $this->answer->validasiquestion($gets, $id_staf);
		$validasikuisonermx= $this->answer->validasiquestionmx($gets, $id_staf);
		$validasiquestionall = $this->answer->validasiquestionall($gets, $id_staf);
		$id_redirect=$validasikuisonermx->mx +1;
		$id_sk=12;
		/*if($entropivalidasi->result() != null ){
			echo "<script>
					alert('Anda Sudah Jawab!!!');
					window.location.href='https://quesioner.my.id/dinas/ranking/answerdetailstaf';
					</script>";
						
		}*/
		/*if($entropivalidasione->result() != null ){
			echo "<script>
					alert('Anda Sudah Jawab!!!');
					window.location.href='https://quesioner.my.id/dinas/Kuisoner/nextquestion/".$id_redirect."';
					</script>";
		}
			
		*/	
		
			foreach ($this->entropy->hitungaspek($id_staf)->result_array() as $row){
						$datas[] = (float) $row['total_score'];
						$data_kategori[] = (string) $row['aspek_subject'];
					}
					
	$max_pertanyaan= $this->kuisoner->maxkuisoner();
	$ep= $this->ranking->rankingall($id_staf);
	$rankingall= $ep->result();
	$totalpertanyaan = $max_pertanyaan->row();
	$lq = $totalpertanyaan->lastquestion;
	$lastquestion=$lq;
	
	$key = $this->config->item('encryption_key');
	//$encrypted_data = $this->encrypt->decode($gets,$key);
	$getsecure=rawurldecode($gets);
	$idnext=$gets+1;
	$secure = rawurlencode($id_pertanyaan);
	//$encrypted_data_url = $this->encrypt->encode($id_pertanyaan,$key);
	//$l=$encrypted_data_url.PHP_EOL;
	$kuisoner= $this->kuisoner->get($gets);
	$poinjawaban= $this->poinjawaban->getkuis($gets);
	$allaspek1= $this->answer->answeraspekview($id_staf);
	$totalpoinaspek = $allaspek1->result();
	//$jumaspekall=$totalpoinaspek->totalpoin;
	$data = array(
				'header' => 'kuisoner',
				'kuisoner' => $kuisoner->result(),
				'poinjawaban' => $poinjawaban->result(),
				'totalpoinaspek'	=> $totalpoinaspek,
				'lastquestion' => $lastquestion,
				'datas'=>$datas, 
				'data_kategori'=>$data_kategori, 
				'rankingall'=>$rankingall, 
				
			);
	if(isset($_POST['NextQuestion'])) {
		
		$poingetfromid= $this->poinjawaban->get($this->input->post('id_data_answer'));
		$ttp = $poingetfromid->row();
		$jumttp=$ttp->poin;
		
		$param = array(
			'id_aspek_answer' => $this->input->post('aspek'),
			'id_pertanyaan' => $gets,
			'id_answer_choice' =>$this->input->post('id_data_answer'),
			'jumlah_jawaban_poin' =>$jumttp,
			'id_employee_q' => $id_staf,
			
		);
		//$id_data_answer = $this->input->post('id_data_answer');
		//$password = $this->input->post('password');
		if($validasikuisoner->result() == null){
		$insertkuis = $this->answer->add($param);
		}
		;
		$aspek_user= $this->input->post('aspek');
		/*$pss=0;
		foreach ($this->kuisoner->cekdataid($aspek_user, $id_staf, $gets-1)->result_array() as $row){
			//$dataredudan[$kp] = (int) $row['jumla_redudan'];
		
		$dataidgets[$pss] = (int) $row['dataid'];
		$pss++;
		
		}
		$jumlahx=count($this->kuisoner->cekdataid($aspek_user, $id_staf, $gets-1)->result_array());
		if($jumlahx > 1 )
		for($i=0; $i<$jumlahx-1;$i++){
			$this->kuisoner->deletedataredudan($id_staf, $aspek_user, $gets-1, $dataidgets[$i]);
		}
		//$jumlahreduadn = $this->answer->cekredudan($id_staf, $aspek_user, $gets)->result_array();
		
		//($jumlahx);
*/
		if($gets %3 == 0) {
		
		$answer_total= $this->answer->answerbyiduser($id_staf, $aspek_user);
		$totalpoinall = $answer_total->row();
		$jum=$totalpoinall->totalpoin;
		
		$kuisonerget= $this->aspek->get($aspek_user);
		$ambil = $kuisonerget->row();
		$max = $ambil->nilai_max_kompeten;
		$min = $ambil->nilai_min_kompeten;
		$entropylog=log($jum, 2);
		//print_r($jum);
		if( $jum <  $min){
			$prediksi="tidak kompeten";
		}
		
		else{
			$prediksi="kompeten";
		}
		$allpertanyaan= $this->kuisoner->getpertanyaanaspek($aspek_user);
		$retur_pertanyaan = $allpertanyaan->result_array();
		$indeksone=$retur_pertanyaan[0]->id_pertanyaan;
		//$indektwo=$retur_pertanyaan[1]->id_pertanyaan;
		//$indektree=$retur_pertanyaan[2]->id_pertanyaan;
		//print_r($retur_pertanyaan, $indeksone)
		$kp=0;
		$mn0=0;
		foreach ($this->kuisoner->getpertanyaanaspek($aspek_user)->result_array() as $row){
			$datapertanyaaan[] = (int) $row['id_pertanyaan'];
			//$data_kategori[] = (string) $row['aspek_subject'];
			foreach ($this->kuisoner->cekredudan($aspek_user, $id_staf, $datapertanyaaan[$kp])->result_array() as $row){
				$dataredudan[$kp] = (int) $row['jumla_redudan'];
				foreach ($this->kuisoner->cekdataid($aspek_user, $id_staf, $datapertanyaaan[$kp])->result_array() as $row){
					//$dataredudan[$kp] = (int) $row['jumla_redudan'];
				
				$dataid[$mno] = (int) $row['dataid'];
				$mno++;
				
				}
			}
			if($dataredudan[$kp] > 1){
			//	$this->kuisoner->deletedataredudan($id_staf, $aspek_user, $datapertanyaaan[$kp], $dataredudan[$kp]);
		   }

			$kp++;
			
		}
		$pss=0;
		for($llii=0; $llii<3; $llii++){

		
		foreach ($this->kuisoner->cekdataid($aspek_user, $id_staf, $datapertanyaaan[$llii])->result_array() as $row){
			//$dataredudan[$kp] = (int) $row['jumla_redudan'];
		
		$datagetquestion[$llii][$pss] = (int) $row['dataid'];
		
		if(count($datagetquestion[$llii]) > 1){
			$this->kuisoner->deletedataredudan($id_staf, $aspek_user,  $datapertanyaaan[$llii], $datagetquestion[$llii][$pss]);
		}
		$pss++;
		}
		
		}
	//	$jumlahx[1]=count($this->kuisoner->cekdataid($aspek_user, $id_staf, $datapertanyaaan[1])->result_array());
	//	$jumlahx[2]=count($this->kuisoner->cekdataid($aspek_user, $id_staf, $datapertanyaaan[3])->result_array());
		
		//for($kip=0; $kip<3; $kip++){
		/*	$jumlahx[$kip]=count($this->kuisoner->cekdataid($aspek_user, $id_staf, $datapertanyaaan[$kip])->result_array());
		
		//if($jumlahx[$kip] > 1 ){
		//	$jumlahsisa[$kip] = $jumlahx[$kip] - 2;
			//1,2,38
			for($pn=0; $pn < 3; $pn++){
				if(count($datagetquestion[$pn]) != 1 ){

				for($i=0; $i<count($datagetquestion[$pn]);$i++){
					//	$this->kuisoner->deletedataredudan($id_staf, $aspek_user,  $datapertanyaaan[$pn], $datagetquestion[$pn][$i]);
					}
				}
			//}
	}
		//}.
*/

	
		for($kip=0; $kip<3; $kip++){
		print_r(count($datagetquestion[$kip]));
		}
		//for($hh=0; $hh < count($retur_pertanyaan);$hh++ ){
		//	if(count($jumlahreduadn) > 1){
		//		echo count($jumlahreduadn);
		//		$deletedata =  $this->answer->deletedataredudan($id_staf, $aspek_user, $gets);
		//	}	
//}
		

		$param = array(
			'id_user' => $id_staf,
			'nilai_log_entropy' =>$jum,
			'id_aspek_entropy' => $this->input->post('aspek'),
			'prediksi_aspek' => $prediksi,
			
		);
		//redirect('Kuisoner/nextquestion/'.$idnext, $data);
		//$id_data_answer = $this->input->post('id_data_answer');
		//$password = $this->input->post('password');
		if($validasikuisoner->result() == null){
	//tutupdulu	
	$insertkuis = $this->entropy->add($param);
		}
	
}
	if($gets == $lastquestion) {
		$answer_total= $this->answer->answerall($id_staf);
		$totalpoinall = $answer_total->row();
		$jum=$totalpoinall->totalpoin;
		$aspek_user= $this->input->post('aspek');
		$kuisonerget= $this->aspek->get($aspek_user);
		$ambil = $kuisonerget->row();
		$max = $ambil->nilai_max_kompeten;
		$min = $ambil->nilai_min_kompeten;
		$jumlah_aspek = 13;
		$fp=1;
		$fn=1;
		$kom= $this->entropy->answerkompeten($id_staf);
		$seleckompeten = $kom->row();
		$jumkompeten=$seleckompeten->jumlahkompeten;
		
		$tdkkom= $this->entropy->answertdkkompeten($id_staf);
		$selectdkkompeten = $tdkkom->row();
		$tidakkompeten=$selectdkkompeten->jumlahtdkkompeten;
		
		
		$akurasiok = (($jumkompeten + $tidakkompeten) /($jumkompeten + $tidakkompeten + $fp + $fn))*100;
		$presisiok = (($jumkompeten) /($jumkompeten + $fp)) * 100;
		$recallok = (($jumkompeten) /($jumkompeten + $fn)) * 100;
		
		
		//presisi
		$presisi1 = ($jumlah_aspek / ($jumlah_aspek + 0)) * 100;
		if($tidakkompeten == 0){
			$presisi2 = 1;
		}
		else{
			$presisi2 = ($tidakkompeten /($tidakkompeten + 0 )) * 100;
			
		}
		if($jumkompeten == 0){
			$presisi3 = 1;
		}
		else{
		$presisi3 = ($jumlah_aspek + $jumkompeten / $jumlah_aspek  ) * 100;
			
		}
		
		$presisi_user = $presisi1 + $presisi2 + $presisi3 / 100;
		
		//recall
		$recall1 = ($jumlah_aspek / ($jumlah_aspek + 0)) * 100;
		$recall2 = ($tidakkompeten / ($tidakkompeten + $jumkompeten)) * 100;
		$recall3 = ($jumlah_aspek / ($jumlah_aspek + 0)) * 100;
		$recall_user = ($recall1 + $recall2 + $recall3) / 100;
		//akurasi
		$akurasi1 = ($jumlah_aspek + $tidakkompeten + $jumlah_aspek);
		$akurasi2 = ($jumlah_aspek + ($jumlah_aspek - 1) + $jumlah_aspek);
		$akurasi_user = ($akurasi1 / $akurasi2) * 100;
		
		$param = array(
			'aspek_total' => $jum,
			'jumlah_kompeten' => $jumkompeten,
			'jumlah_tdk_kompeten' => $tidakkompeten,
			'presisi1' => $presisi1,
			'presisi2' => $presisi2,
			'presisi3' => $presisi3,
			'presisi_user' => $presisiok,
			'recall1' => $recall1,
			'recall2' => $recall2,
			'recall3' => $recall3,
			'recall_user' => $recallok,
			'akurasi1' => $akurasi1,
			'akurasi2' => $akurasi2,
			'akurasi_user' => $akurasiok,
			'id_user_ranking' => $id_staf,
			
		);
			
		//$id_data_answer = $this->input->post('id_data_answer');
		//$password = $this->input->post('password');
	// tutupdulu	
	$insertkuis = $this->ranking->add($param);
		
	//redirect('Kuisoner/nextquestion/'.$idnext, $data);
	}
	
	
		redirect('Kuisoner/nextquestion/'.$idnext, $data);
	}
	//entropy hitung
	
	
	
	
	//akurasi presisi recall hitung
	//$this->load->view('headerstaf');
	$this->load->view('Kuisoner', $data);
	
		
	} 
}
		
	
	

	


	

