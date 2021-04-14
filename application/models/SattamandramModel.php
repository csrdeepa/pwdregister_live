<?php
class SattamandramModel extends CI_Model{
	function sattamandramList() {
		$usp_read_sattamandram = "CALL usp_read_sattamandram()";
        $query = $this->db->query($usp_read_sattamandram);
        if ($query) {
            return $query->result();
        }
    }

    function get_sattamandram($id) {
		$usp_readarow = "CALL usp_readarow_sattamandram(?)";
		$data = array('id' => $id);
        $query = $this->db->query($usp_readarow, $data);
        if ($query) {
            return $query->row();
        }
        return NULL;
    }

    function saveSattamandram($data) {
        try {
            $this->db->reconnect();
            $sql = "call usp_insert_sattamandram('".implode("','",($data))."')";
            $datavalue = $this->db->query($sql);

            $lastinsertId = $this->db->insert_id();
            // print_r($lastinsertId);
            // $updatedata=array(
            //     'sattamandramid'=> $lastinsertId,
            // );
            // $this->db->where('id', $lastinsertId);
            // $query = $this->db->update('tbl_msattamandram', $updatedata);

            $this->db->close();
			return $datavalue;
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function updateSattamandram($data) {
        try {
        $usp_update_sattamandram = "CALL usp_update_sattamandram('".implode("','",($data))."')";
        $result = $this->db->query($usp_update_sattamandram);
        return $result;
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    function deleteSattamandram($id) {
    try {
		$sql = "CALL usp_delete_sattamandram('".implode("','",($id))."')";
        $result = $this->db->query($sql);
        return $result;
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
	}
}