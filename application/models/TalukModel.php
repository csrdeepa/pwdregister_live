<?php
class TalukModel extends CI_Model{
	function talukList() {
		$usp_read_taluk = "CALL usp_read_taluk()";
        $query = $this->db->query($usp_read_taluk);
        if ($query) {
            return $query->result();
        }
    }

    function get_taluk($id) {
		$usp_readarow = "CALL usp_readarow(?)";
		$data = array('id' => $id);
        $query = $this->db->query($usp_readarow, $data);
        if ($query) {
            return $query->row();
        }
        return NULL;
    }

    function saveTaluk($data) {
        try {
            $this->db->reconnect();
            $sql = "call usp_insert_taluk('".implode("','",($data))."')";
            $datavalue = $this->db->query($sql);

            $lastinsertId = $this->db->insert_id();
            // print_r($lastinsertId);
            // $updatedata=array(
            //     'talukid'=> $lastinsertId,
            // );
            // $this->db->where('id', $lastinsertId);
            // $query = $this->db->update('tbl_mtaluk', $updatedata);

            $this->db->close();
			return $datavalue;
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function updateTaluk($data) {
        try {
        $usp_update_taluk = "CALL usp_update_taluk('".implode("','",($data))."')";
        $result = $this->db->query($usp_update_taluk);
        return $result;
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    function deleteTaluk($id) {
    try {
		$sql = "CALL usp_delete_taluk('".implode("','",($id))."')";
        $result = $this->db->query($sql);
        return $result;
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
	}
}