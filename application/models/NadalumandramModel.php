<?php
class NadalumandramModel extends CI_Model{
	function nadalumandramList() {
		$usp_read_nadalumandram = "CALL usp_read_nadalumandram()";
        $query = $this->db->query($usp_read_nadalumandram);
        if ($query) {
            return $query->result();
        }
    }

    function get_nadalumandram($id) {
		$usp_readarow = "CALL usp_readarow_nadalumandram(?)";
		$data = array('id' => $id);
        $query = $this->db->query($usp_readarow, $data);
        if ($query) {
            return $query->row();
        }
        return NULL;
    }

    function saveNadalumandram($data) {
        try {
            $this->db->reconnect();
            $sql = "call usp_insert_nadalumandram('".implode("','",($data))."')";
            $datavalue = $this->db->query($sql);

            $lastinsertId = $this->db->insert_id();
            // print_r($lastinsertId);
            // $updatedata=array(
            //     'nadalumandramid'=> $lastinsertId,
            // );
            // $this->db->where('id', $lastinsertId);
            // $query = $this->db->update('tbl_mnadalumandram', $updatedata);

            $this->db->close();
			return $datavalue;
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function updateNadalumandram($data) {
        try {
        $usp_update_nadalumandram = "CALL usp_update_nadalumandram('".implode("','",($data))."')";
        $result = $this->db->query($usp_update_nadalumandram);
        return $result;
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    function deleteNadalumandram($id) {
    try {
		$sql = "CALL usp_delete_nadalumandram('".implode("','",($id))."')";
        $result = $this->db->query($sql);
        return $result;
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
	}
}