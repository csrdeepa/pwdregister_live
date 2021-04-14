<?php
class Db extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    public function index(){
        if( $this->db->table_exists('register') == FALSE ){
            $query="";
            $query = "CREATE TABLE register (
                id int AUTO_INCREMENT PRIMARY KEY,
                ucode char(10) NOT NULL,
                
                salutation char(10) Not NULL,
                efirstname char(50) NOT NULL,
                elastname char(50) NOT NULL,
                tfirstname char(50) NOT NULL,
                tlastname char(50) NOT NULL,

                dob date NOT NULL,
                age int,
                email varchar(30) NOT NULL,                
                gender enum('male','female', 'other') NOT NULL, 
                phone varchar(10) DEFAULT NULL,
                phone2 varchar(10) DEFAULT NULL,

                profilePic longblob NULL,
                profilePicpath varchar(100) NULL,
                pdffile varchar(50) NULL,   

                gardiantype varchar(10) NOT NULL,
                gardianname char(50) NOT NULL,
                egardianname char(50) NOT NULL,
                gardiancontact1 varchar(10) DEFAULT NULL,
                gardiancontact2 varchar(10) DEFAULT NULL,

                maritalstatus int,

                religion int,
                caste int,
                edu int,
                business int,

                tpstreet_addres varchar(50) NOT NULL,
                tpstreet_landmark varchar(100) NOT NULL,
                tpvartno varchar(50) NOT NULL,
                tpvillage varchar(50) NOT NULL,
                tppost varchar(50) NOT NULL,
                
                pertamiltaluk int null,
                pertamildistrict int null,  
                pertamilstate int null,
                pertamilzip int null,  

                epstreet_addres varchar(50) NOT NULL,
                epstreet_landmark varchar(100) NOT NULL,
                epvartno varchar(50) NOT NULL,
                epvillage varchar(50) NOT NULL,
                eppost varchar(50) NOT NULL, 

                perengtaluk int null,
                perengdistrict int null,  
                perengstate int null,
                perengzip int null,   
                -- ptaluk varchar(20) NOT NULL,
                -- pdist int null,
                -- pstate varchar(50) NOT NULL,
                -- pzip  varchar(10) NOT NULL,  

                ttstreet_addres varchar(50) NOT NULL,
                ttstreet_landmark varchar(100) NOT NULL,
                ttvartno varchar(50) NOT NULL,
                ttvillage varchar(50) NOT NULL,
                ttpost varchar(50) NOT NULL,
                
                temptamiltaluk int null,
                temptamildistrict int null,  
                temptamilstate int null,
                temptamilzip int null,  

                etstreet_addres varchar(50) NOT NULL,
                etaddress_landmark varchar(100) NOT NULL,
                etvartno varchar(50) NOT NULL,
                etvillage varchar(50) NOT NULL,
                etpost varchar(50) NOT NULL,       
                
                tempengtaluk int null,
                tempengdistrict int null,  
                tempengstate int null,
                tempengzip int null,     

                -- ttaluk varchar(20) NOT NULL,
                -- tdist int null,
                -- tstate varchar(50) NOT NULL,
                -- tzip  varchar(10) NOT NULL,   

                udidno varchar(15) NOT NULL,
                nalavariyano varchar(20) NOT NULL,
                familycard varchar(15) NOT NULL,
                aadhar varchar(12) NOT NULL,
                voterid varchar(10) NOT NULL,
                empregno varchar(10) NOT NULL,
                empregdate date not null,
                sattamandram int,
                nadalumandram int,
                dftype int,
                dftypenew  varchar(30) NOT NULL,
                dftype1 int,
                dftype2 varchar(10) NOT NULL,

                dfvehicleusage int,
                dfvehicleusage1 int,
                dfsupportmatrialusing int, 
                dfsupportmatrialusing1 int,
                dfhappendby int,
                dfpercentage int,
                walkingwithoutsupportmaterial int,
                havingmembership int,

                membershipnumber varchar(10) NOT NULL,
                membershipdate date not null,
                membershipfeespaid int,
                membershipreceiptno varchar(10) not null,
                membershipreceiptdate date not null,
                helpfromtrust  varchar(100) NOT NULL,
                otherhelpfromtrust  varchar(100) NOT NULL,
                otherhelpfromtrusteng  varchar(100) NOT NULL,

                ipaddress varchar(100) null,
                createdby int,
                modifiedby int,
                createddate timestamp NOT NULL DEFAULT current_timestamp(),
                modifieddate timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                active int,

                hobbies varchar(50) NOT NULL,
                detdata varchar(1000) NULL                
        )ENGINE = InnoDB;";
              $this->db->query($query);
            // ALTER TABLE `register`
            //   ADD PRIMARY KEY (`id`),
            //   ADD UNIQUE KEY `aadhar` (`aadhar`),
            //   ADD UNIQUE KEY `udidno` (`udidno`);
        }

        if( $this->db->table_exists('tbl_mdftype') == FALSE ){
            $query="";
            $query = "CREATE TABLE `tbl_mdftype` (
                `id` int AUTO_INCREMENT PRIMARY KEY,
                `dfid` int NULL,
                `dfshort` varchar(10) NULL,
                `dftype` varchar(50) NULL,
                `subavailable` int(11)  NULL,
                 `active` int  NULL
              )";
              $this->db->query($query);
        }

        if( $this->db->table_exists('tbl_mstate') == FALSE ){
            $query="";
            $query = "CREATE TABLE `tbl_mstate` (
                `id` int AUTO_INCREMENT PRIMARY KEY,
                `stateid` int  NULL,
                `statecode` varchar(2)  NULL,
                `statename` varchar(8)  NULL,
                 `estatename` varchar(25)  NULL,
                `countryid` int(1)  NULL,
                `active` int(1)  NULL
              ) ENGINE=InnoDB  CHARSET=utf8;";
              $this->db->query($query);
        }  
        
        if( $this->db->table_exists('tbl_mdistrict') == FALSE ){
            $query="";
            $query = "CREATE TABLE `tbl_mdistrict` (
               `id` int AUTO_INCREMENT PRIMARY KEY,
                `districtid` int  NULL,
                `districtcode` varchar(4)  NULL,
                `districtname` varchar(50)  NULL,
                `edistrictname` varchar(50)  NULL,                
                `stateid` int(1)  NULL,
                `countryid` int(1)  NULL,
                `active` int(1)  NULL
              ) ENGINE=InnoDB  CHARSET=utf8;";
              $this->db->query($query);
        }       
        
        if( $this->db->table_exists('tbl_mtaluk') == FALSE ){
            $query="";
            $query = "CREATE TABLE `tbl_mtaluk` (
                `id` int AUTO_INCREMENT PRIMARY KEY,
                `talukid` int DEFAULT NULL,
                `talukcode` varchar(3)  NULL,
                `talukname` varchar(50)  NULL,
                `etalukname` varchar(50)  NULL,                
                `districtid` int(1)  NULL,
                `stateid` int(1)  NULL,
                `countryid` int(1)  NULL,
                `active` int(1)  NULL
              ) ENGINE=InnoDB  CHARSET=utf8;";
              $this->db->query($query);
        }

        if( $this->db->table_exists('tbl_userlist') == FALSE ){
            $query="";
            $query = "CREATE TABLE `tbl_userlist` (
                    `id` int AUTO_INCREMENT PRIMARY KEY,
                    `userid` int  NULL,
                    `usercode` int  NULL,
                    `user_name` varchar(10)  NULL,
                    `userpassword` int(3)  NULL,
                    `userroleid` int(1)  NULL,
                    `active` int(1)  NULL
                    ) ENGINE=InnoDB  CHARSET=utf8;";
              $this->db->query($query);
        }              

        if( $this->db->table_exists('tbl_userrights') == FALSE ){
            $query="";
            $query = "CREATE TABLE tbl_userrights (
                `id` int AUTO_INCREMENT PRIMARY KEY,
                `roleid` varchar(10)  NULL,
                `userid` varchar(10)  NULL,
                `menuname` varchar(10)  NULL,
                `menuaccessrights` varchar(10)  NULL,
                `active` int(1)  NULL
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
              $this->db->query($query);
        }        
        if( $this->db->table_exists('tbl_userrole') == FALSE ){
            $query="";
            $query = "CREATE TABLE `tbl_userrole` (
                `id` int AUTO_INCREMENT PRIMARY KEY,
                `userroleid` int  NULL,
                `userrole` varchar(11)  NULL,
                `active` int(1)  NULL
              ) ENGINE=InnoDB  CHARSET=utf8;";
              $this->db->query($query);
        }        

        if( $this->db->table_exists('tbl_mnadalumandram') == FALSE ){
            $query="";
            $query = "CREATE TABLE `tbl_mnadalumandram` (
                `id` int AUTO_INCREMENT PRIMARY KEY,
                `nadalumandramid` int  NULL,
                `nadalumandramcode` varchar(3)  NULL,
                `nadalumandramname` varchar(9)  NULL,
                `enadalumandramname` varchar(9)  NULL,
                `active` int(1) DEFAULT NULL
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
              $this->db->query($query);
        }
        if( $this->db->table_exists('tbl_msattamandram') == FALSE ){
            $query="";
            $query = "CREATE TABLE `tbl_msattamandram` (
               `id` int AUTO_INCREMENT PRIMARY KEY,
                `sattamandramid` int  NULL,
                `sattamandramcode` varchar(3)  NULL,
                `sattamandramname` varchar(5)  NULL,
                `esattamandramname` varchar(5)  NULL,
                `active` int(1)  NULL
              ) ENGINE=InnoDB  CHARSET=utf8;";
              $this->db->query($query);
        }                
                if( $this->db->table_exists('user_login') == FALSE ){
            $query = "CREATE TABLE user_login(
                    id int AUTO_INCREMENT PRIMARY KEY,
                    user_name varchar(50) NOT NULL,
                    user_email varchar(100) NOT NULL,
                    user_password varchar(255) NOT NULL,
                    userrole_id int(11) NOT NULL,
                    createddate timestamp NOT NULL DEFAULT current_timestamp(),
                    modifieddate timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
            )ENGINE = InnoDB;";      
            $this->db->query($query);
        }
        ///////////******** */
 
        // if( $this->db->table_exists('register_det') == FALSE ){
        //     $query="";
        //     $query = " CREATE TABLE `register_det` (
        //         `id` int AUTO_INCREMENT PRIMARY KEY,
        //         `detuid` int(11) NOT NULL,
        //         `parentid` int(11) NOT NULL,
        //         `dname` varchar(75) NOT NULL,
        //         `dgender` enum('male','female','other') NOT NULL,
        //         `dage` int(11) NOT NULL,
        //         `drelationship` varchar(50) NOT NULL,
        //         `djob` varchar(50) NOT NULL,
        //         `dactive` int(11) NOT NULL
        //       ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        //     $this->db->query($query);
        // }

        // if( $this->db->table_exists('users') == FALSE ){
        //     $query="";
        //     $query = "CREATE TABLE `users` (
        //         `id` int AUTO_INCREMENT PRIMARY KEY,
        //         `email` varchar(40) NOT NULL,
        //         `password` varchar(40) NOT NULL,
        //         `fname` varchar(100) NOT NULL
        //       ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
        //       $this->db->query($query);
        // }
        echo "Successfully Created !!";
    }
    
}
 
 
//  CREATE  PROCEDURE `usp_insert_taluk`( IN `talukcode` VARCHAR(5), IN `talukname` VARCHAR(255), IN `etalukname` VARCHAR(255), IN `districtid` INT, IN `stateid` INT, IN `countryid` INT, IN `active` INT)
// INSERT INTO tbl_mtaluk(talukcode, talukname, etalukname, districtid, stateid, countryid, active) VALUES(talukcode, talukname, etalukname, districtid, stateid, countryid, active)

// CREATE PROCEDURE `usp_read_taluk`()
// select t.*, d.districtcode, d.districtname, d.edistrictname  from tbl_mtaluk t left join tbl_mdistrict d on d.id=t.districtid

// CREATE PROCEDURE `usp_readarow`(IN `tid` INT(11))
// select *  from tbl_mtaluk where id = tid  

// CREATE PROCEDURE `usp_update_taluk`(IN `tid` INT, IN `talukid` INT, IN `talukcode` VARCHAR(5), IN `talukname` VARCHAR(255), IN `etalukname` VARCHAR(255), IN `districtid` INT, IN `stateid` INT, IN `countryid` INT, IN `active` INT)
// update tbl_mtaluk set talukid = talukid, talukcode = talukcode, talukname = talukname, etalukname = etalukname, districtid = districtid, stateid = stateid, countryid = countryid, active = active where id = tid

// CREATE PROCEDURE `usp_delete_taluk`(IN `id` INT)
// DELETE FROM tbl_mtaluk WHERE id = id


// Sattamandram
// CREATE PROCEDURE `usp_insert_sattamandram`( IN `sattamandramcode` VARCHAR(5), IN `sattamandramname` VARCHAR(255), IN
// `esattamandramname` VARCHAR(255),  IN `active` INT)
// INSERT INTO tbl_msattamandram(sattamandramcode, sattamandramname, esattamandramname, active) VALUES(sattamandramcode,
// sattamandramname, esattamandramname, active)

// CREATE PROCEDURE `usp_read_sattamandram`()
// select * from tbl_msattamandram 

// CREATE PROCEDURE `usp_readarow_sattamandram`(IN `sid` INT(11))
// select * from tbl_msattamandram where id = sid

// CREATE PROCEDURE `usp_update_sattamandram`(IN `sid` INT, IN `sattamandramid` INT, IN `sattamandramcode` VARCHAR(5),
// IN `sattamandramname` VARCHAR(255), IN `esattamandramname` VARCHAR(255), IN `active` INT)
// update tbl_msattamandram set sattamandramid = sattamandramid, sattamandramcode = sattamandramcode, sattamandramname =
// sattamandramname, esattamandramname = esattamandramname, active = active where id = sid

// CREATE PROCEDURE `usp_delete_sattamandram`(IN `e_id` INT)
// DELETE FROM tbl_msattamandram WHERE id = e_id

// Nadalumandram

// CREATE PROCEDURE `usp_insert_nadalumandram`( IN `nadalumandramcode` VARCHAR(5), IN `nadalumandramname` VARCHAR(255), IN
// `enadalumandramname` VARCHAR(255),  IN `active` INT)
// INSERT INTO tbl_mnadalumandram(nadalumandramcode, nadalumandramname, enadalumandramname, active) VALUES(nadalumandramcode,
// nadalumandramname, enadalumandramname, active)

// CREATE PROCEDURE `usp_read_nadalumandram`()
// select * from tbl_mnadalumandram 

// CREATE PROCEDURE `usp_readarow_nadalumandram`(IN `nid` INT(11))
// select * from tbl_mnadalumandram where id = nid

// CREATE PROCEDURE `usp_update_nadalumandram`(IN `nid` INT, IN `nadalumandramid` INT, IN `nadalumandramcode` VARCHAR(5),
// IN `nadalumandramname` VARCHAR(255), IN `enadalumandramname` VARCHAR(255), IN `active` INT)
// update tbl_mnadalumandram set nadalumandramid = nadalumandramid, nadalumandramcode = nadalumandramcode, nadalumandramname =
// nadalumandramname, enadalumandramname = enadalumandramname, active = active where id = nid

// CREATE PROCEDURE `usp_delete_nadalumandram`(IN `nid` INT)
// DELETE FROM tbl_mnadalumandram WHERE id = nid