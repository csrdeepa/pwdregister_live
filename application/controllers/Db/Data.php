
INSERT INTO `tbl_mdftype` (`id`, `dfid`, `dfshort`, `dftype`, `active`) VALUES
(1, 1, '', 'Blindness', 1),
(2, 2, '', 'Low vision', 1),
(3, 3, '', 'Leprosy Cured', 1),
(4, 4, '', 'Hearing Impairment (Deaf and Hard of Hearing)', 1),
(5, 5, '', 'Dwarfism', 1),
(6, 6, '', 'Intellectual Disability', 1),
(7, 7, '', 'Mental illness', 1),
(8, 8, '', 'Autism Spectrum Disorder', 1),
(9, 9, '', 'Cerebral Palsy', 1),
(10, 10, '', 'Muscular Dystrophy', 1),
(11, 11, '', 'Chronic Neurological Conditions', 1),
(12, 12, '', 'Specific Learning Disability', 1),
(13, 13, '', 'Multiple sclerosis', 1),
(14, 14, '', 'Speech and Language Disability', 1),
(15, 15, '', 'Thalassemia', 1),
(16, 16, '', 'Haemophilia', 1),
(17, 17, '', 'Sickle Cell disease', 1),
(18, 18, '', 'Multiple Disabilities including Deaf Blindness', 1),
(19, 19, '', 'Acid attack Victim', 1),
(20, 20, '', 'Parkinson\'s disease', 1),
(21, 21, 'LD', 'Locomotor disability', 1);
 
// All Districts in Tamilnadu

INSERT INTO `tbl_mdistrict` (`id`, `districtid`, `districtcode`, `districtname`, `edistrictname`, `stateid`, `countryid`, `active`) VALUES
(1,1,"AR", "mhpaY]h;", 'Ariyalur',1,1,1),
(2,2,"CGL", "br';fy;gl;L", 'Chengalpattu',1,1,1),
(3,3,"CH", "brd;id", 'Chennai',1,1,1),
(4,4,"CO", "nfhak;g[j;J]h;", 'Coimbatore',1,1,1),
(5,5,"CU", "flY]h;", 'Cuddalore',1,1,1),
(6,6,"DH", "jUkg[hp", 'Dharmapuri',1,1,1),
(7,7,"DI", "jpz;Lf;fy;", 'Dindigul',1,1,1),
(8,8,"ER", "&lt;nuhL", 'Erode',1,1,1),
(9,9,"KL", "fs;sf;Fwpr;rp", 'Kallakurichi',1,1,1),
(10,10,"KC", 'fh";rpg[uk;', 'Kanchipuram',1,1,1),
(11,11,"KK", "fd;dpahFkhp", 'Kanyakumari',1,1,1),
(12,12,"KR", 'f%h;', 'Karur',1,1,1),
(13,13,"KRI", "fpU\;zfphp", 'Krishnagiri',1,1,1),
(14,14,"MDU", 'kJiu', 'Madurai',1,1,1),
(15,15,"MYD", 'kapyhLJiw', 'Mayiladuthurai',1,1,1),
(16,16,"NG", 'ehfg;gl;odk;', "Nagapattinam",1,1,1),
(17,17,"NM", "ehkf;fy;", 'Namakkal',1,1,1),
(18,18,"NI", 'ePyfphp', 'Nilgiris',1,1,1),
(19,19,"PE", 'bguk;gY]h;', 'Perambalur',1,1,1),
(20,20,"PU", 'g[Jf;nfhl;il', 'Pudukkottai',1,1,1),
(21,21,"RA", ",uhkehjg[uk;", 'Ramanathapuram',1,1,1),
(22,22,"RN", ",ubzpg;ngl;il", 'Ranipet',1,1,1),
(23,23,'SA', "nryk;", 'Salem',1,1,1),
(24,24,"SI", "rptf';if", 'Sivaganga',1,1,1),
(25,25,"TS", "bjd;fhrp", 'Tenkasi',1,1,1),
(26,26,"TJ", 'j";rht{h;', 'Thanjavur',1,1,1),
(27,27,"TH", "njdp", 'Theni',1,1,1),
(28,28,"TK", "J]j;Jf;Fo", 'Thoothukudi',1,1,1),
(29,29,"TC", "jpUr;rpuhg;gs;sp", 'Tiruchirappalli',1,1,1),
(30,30,"TI", "jpUbey;ntyp", 'Tirunelveli',1,1,1),
(31,31,"TU", "jpUg;gj;J]h;", 'Tirupathur',1,1,1),
(32,32,"TP", "jpUg;g{h;", 'Tirupur',1,1,1),
(33,33,"TL", "jpUts;qh;", 'Tiruvallur',1,1,1),
(34,34,"TV", "jpUtz;zhkiy", 'Tiruvannamalai',1,1,1),
(35,35,"TR", "jpUth%h;", 'Tiruvarur',1,1,1),
(36,36,"VE", "ntY]h;", 'Vellore',1,1,1),
(37,37,"VL", "tpGg;g[uk;", 'Viluppuram',1,1,1),
(38,38,"VR", "tpUJefh;", 'Virudhunagar',1,1,1),
(39, 39, 'blr', 'bg\';fqU', 'Bangalore', 3, 1, 1);
 
INSERT INTO `tbl_mnadalumandram` (`id`, `nadalumandramid`, `nadalumandramcode`, `nadalumandramname`, `active`) VALUES
(1, 1, 'MTD', 'nkl;^h;', 1),
(2, 2, 'AND', 'me;jpa{h;', 1);
 
INSERT INTO `tbl_msattamandram` (`id`, `sattamandramid`, `sattamandramcode`, `sattamandramname`, `active`) VALUES
(1, 1, 'bhk', 'gthdp', 1),
(2, 2, 'kbi', 'nfhgp', 1);
 
INSERT INTO `tbl_mstate` (`id`, `stateid`, `statecode`, `statename`, `estatename`, `countryid`, `active`) VALUES
(1,1,"TN","jkpH;ehL","Tamil Nadu", 1,1),
(2,2,"AP","Me;jpug; gpunjrk;","Andhra Pradesh", 1,1),
(3,3,"KA","fh;ehlfh","Karnataka", 1,1),
(4,4,"KL","nfush","Kerala", 1,1),
(5,5,"TG","bjY';fhdh","Telangana", 1,1),
(6,6,"AR","mUzhr;ryg; gpunjrk;","Arunachal Pradesh", 1,1),
(7,7,"AS","mrhk;","Assam", 1,1),
(8,8,"BR","gPfhh;","Bihar", 1,1),
(9,9,"CT","rj;jP!;fh;","Chhattisgarh", 1,1),
(10,10,"GA","nfhth","Goa", 1,1),
(11,11,"GJ","F#uhj;","Gujarat", 1,1),
(12,12,"HR","mupahdh","Haryana", 1,1),
(13,13,"HP",",khr;ryg; gpunjrk;","Himachal Pradesh", 1,1),
(14,14,"JH","#hh;fz;l;","Jharkhand", 1,1),
(15,15,"MP","kj;jpag; gpunjrk;","Madhya Pradesh", 1,1),
(16,16,"MH","kfhuh\;ouh","Maharashtra", 1,1),
(17,17,"MN","kzpg;g{h;","Manipur", 1,1),
(18,18,"ML","nkfhyah","Meghalaya", 1,1),
(19,19,"MZ","kpnrhuk;","Mizoram", 1,1),
(20,20,"NL","ehfhye;J","Nagaland", 1,1),

(21,21,"OD", "xhprh", "Odisha", 1,1),
(22,22,"PB", "g";rhg;", "Punjab", 1,1),
(23,23,"RJ", "uh#!;jhd;", "Rajasthan", 1,1),
(24,24,"SK", "rpf;fpk;", "Sikkim", 1,1),
(25,25,"TR", "jphpg[uh", "Tripura", 1,1),
(26,26,"UP", "cj;jugpunjrk;", "Uttar Pradesh", 1,1),
(27,27,"UT", "cj;jufz;l;", "Uttarakhand", 1,1),
(28,28,"WB", "nkw;F t';fk;", "West Bengal", 1,1);
 
INSERT INTO `tbl_mtaluk` (`id`, `talukid`, `talukcode`, `talukname`, `etalukname`, `districtid`, `stateid`, `countryid`, `active`) VALUES
(1, 1, 'an', 'me;jpa{h;', 'Andhiyur', 1, 1, 1, 1),
(3, 2, 'mtd', 'nkl;^h;', 'Mettur', 2, 1, 1, 1),
(4, 3, 'GI', 'nfhgp', 'Gopi', 1, 1, 1, 1),
(5, 4, 'bha', 'gthdp', 'Bhavani', 1, 1, 1, 1),
(6, 5, 'slm', 'nryk;', 'Salem', 2, 1, 1, 1);
 
INSERT INTO `tbl_userlist` (`id`, `userid`, `usercode`, `user_name`, `userpassword`, `userroleid`, `active`) VALUES
(1, 1, 1, 'superadmin', 123, 1, 1),
(2, 2, 2, 'admin', 123, 2, 1),
(3, 3, 3, 'user', 123, 3, 1);
  
INSERT INTO `tbl_userrole` (`id`, `userroleid`, `userrole`, `active`) VALUES
(1, 1, 'super admin', 1),
(2, 2, 'admin', 1),
(3, 3, 'user', 1);
  
<!-- INSERT INTO `users` (`id`, `username`, `email`, `password`, `fname`) VALUES
(1, 'admin', 'csrdeepa@gmail.com', '123', ''),
(2, 'superadmin', 'msrdeepa@gmail.com', '123', ''),
(3, 'user', 'csrdeepa@gmail.com', '123', '');
 
INSERT INTO `user_login` (`id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'userroleid', 'userrole', 'active'); -->
  
  <?php 

  

// temptamiltaluk
// temptamildistrict
// temptamilstate

// tempengtaluk
// tempengdistrict
// tempengstate

// pertamiltaluk
// pertamildistrict
// pertamilstate
 
// perengtaluk
// perengdistrict
// perengstate