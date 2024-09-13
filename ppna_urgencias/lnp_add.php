<?php
// >> START OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
<?php
 
#  *** GENERATION INFORMATION *** 
#   
#  Project Name..............: MyProject36
#  Project Source............: C:\Users\ANDRES\Documents\My QwikSites\Projects\MyProject36\MyProject36.dbh
#  Project Session ..........: 3868C082-000E-4073-A5C8-63992A1084C0
#  Group Name................: LNP
#  Group GUID................: 1E6812EC-1750-41E9-8303-D41300095FDD
#  Group SerialID............: 710
#  Page Name.................: Add PPNAPASTO
#  Page Type.................: 3 - Add Page
#  Page GUID.................: D76ABAE5-BFF6-46DD-B86F-55F329CA5599
#  Page SerialID.............: 713
#  Page File Name............: lnp_add
#   
#  Generated on..............: lunes, 10 de diciembre de 2012
#  Generation Timestamp......: 2012-10-12 16:33:36
#  Language..................: PHP
#   
#  19 Page Items:
#   
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  | Ref | Item Name / Caption                      | Type| Item Value Mapping / Reference           | Technical Implementation Name            |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  |   0 | ID                                       | 2   | [ID]                                     | ID                                       |
#  |   1 | TD                                       | 4   | [TD]                                     | TD                                       |
#  |   2 | ND                                       | 2   | [ND]                                     | ND                                       |
#  |   3 | PA                                       | 2   | [PA]                                     | PA                                       |
#  |   4 | SA                                       | 2   | [SA]                                     | SA                                       |
#  |   5 | PN                                       | 2   | [PN]                                     | PN                                       |
#  |   6 | SN                                       | 2   | [SN]                                     | SN                                       |
#  |   7 | FECNAC                                   | 2   | [FECNAC]                                 | FECNAC                                   |
#  |   8 | SX                                       | 2   | [SX]                                     | SX                                       |
#  |   9 | NS                                       | 2   | [NS]                                     | NS                                       |
#  |  10 | FIC3                                     | 2   | [FIC3]                                   | FIC3                                     |
#  |  11 | GP                                       | 2   | [GP]                                     | GP                                       |
#  |  12 | MENSAJE1                                 | 4   | [MENSAJE1]                               | MENSAJE1                                 |
#  |  13 | PUNTAJE                                  | 2   | [PUNTAJE]                                | PUNTAJE                                  |
#  |  14 | Parentesco                               | 2   | [Parentesco]                             | Parentesco                               |
#  |  15 | Ampliacion 1                             | 10  | [ampliacion1]                            | Ampliacion_1                             |
#  |  16 | Prestadora                               | 4   | [prestadora]                             | Prestadora                               |
#  |  17 | Observa urgencias                        | 2   | [observa_urgencias]                      | Observa_urgencias                        |
#  |  18 | registra                                 | 4   | [usuari_registro]                        | registra                                 |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#   
#  Field Types Definition:
#     0 - TEXT       
#     1 - IMAGE      
#     2 - TEXTBOX    
#     3 - RADIOBUTTON
#     4 - LISTMENU   
#     5 - STATICTEXT 
#     6 - HIDDEN     
#     8 - UPLOAD     
#     7 - DATEPICKER 
#     9 - FIELD      
#    10 - CHECKBOX   
#   
#  *** END OF GENERATION INFORMATION *** 
#   

// >> START OF "before standard include" [STDINCLD001] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before standard include" [STDINCLD001] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
include("../config/conexion.php"); 
require('qs_functions.php');
// >> START OF "after standard include" [STDINCLD001] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after standard include" [STDINCLD001] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
// >> START OF "before session init" [SESS001] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before session init" [SESS001] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
@session_start();
// >> START OF "after session init" [SESS001] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after session init" [SESS001] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
// >> START OF "before local declaration" [LCLVARDECL001] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before local declaration" [LCLVARDECL001] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
$row = "";
$err_string = "";
$updateCond = "";
if (isset($_GET["page"])) {
    $current_page = $_GET["page"];
} elseif (isset($_POST["page"])) {
    $current_page = $_POST["page"];
} else {
    $current_page = 1;
}
$quotechar = "`";
$quotedate = "#";
$hidden_tag = "";
$result = "";
$sql = "";
$sql_ext = "";
$formatdate = array();
$formatdate[0] = "";
$formatdate[1] = "";
$formatdate[2] = "";
$formatdate[3] = "";
$formatdate[4] = "";
$formatdate[5] = "";
$formatdate[6] = "";
$formatdate[7] = "";
$formatdate[8] = "";
$formatdate[9] = "";
$formatdate[10] = "";
$formatdate[11] = "";
$formatdate[12] = "";
$formatdate[13] = "";
$formatdate[15] = "";
$formatdate[16] = "";
$formatdate[17] = "";
$formatdate[19] = "";
$formatdate[21] = "";
$seperatedate = array();
$seperatedate[0] = " ";
$seperatedate[1] = " ";
$seperatedate[2] = " ";
$seperatedate[3] = " ";
$seperatedate[4] = " ";
$seperatedate[5] = " ";
$seperatedate[6] = " ";
$seperatedate[7] = " ";
$seperatedate[8] = " ";
$seperatedate[9] = " ";
$seperatedate[10] = " ";
$seperatedate[11] = " ";
$seperatedate[12] = " ";
$seperatedate[13] = " ";
$seperatedate[15] = " ";
$seperatedate[16] = " ";
$seperatedate[17] = " ";
$seperatedate[19] = " ";
$seperatedate[21] = " ";
$sql .= " Select\n";
    $sql .= "     PPNAPASTO.`ID`,\n";
    $sql .= "     PPNAPASTO.`TD`,\n";
    $sql .= "     PPNAPASTO.`ND`,\n";
    $sql .= "     PPNAPASTO.`PA`,\n";
    $sql .= "     PPNAPASTO.`SA`,\n";
    $sql .= "     PPNAPASTO.`PN`,\n";
    $sql .= "     PPNAPASTO.`SN`,\n";
    $sql .= "     PPNAPASTO.`FECNAC`,\n";
    $sql .= "     PPNAPASTO.`SX`,\n";
    $sql .= "     PPNAPASTO.`NS`,\n";
    $sql .= "     PPNAPASTO.`FIC3`,\n";
    $sql .= "     PPNAPASTO.`GP`,\n";
    $sql .= "     PPNAPASTO.`MENSAJE1`,\n";
    $sql .= "     PPNAPASTO.`PUNTAJE`,\n";
    $sql .= "     PPNAPASTO.`LNPE1`,\n";
    $sql .= "     PPNAPASTO.`Parentesco`,\n";
    $sql .= "     PPNAPASTO.`ampliacion1`,\n";
    $sql .= "     PPNAPASTO.`prestadora`,\n";
    $sql .= "     PPNAPASTO.`Fecha Ampliacion`,\n";
    $sql .= "     PPNAPASTO.`observa_urgencias`,\n";
    $sql .= "     PPNAPASTO.`si esta`,\n";
    $sql .= "     PPNAPASTO.`usuari_registro`,\n";
    $sql .= "     PPNAPASTO.`campo anexo1`,\n";
    $sql .= "     PPNAPASTO.`campo anexo2`,\n";
    $sql .= "     PPNAPASTO.`campo anexo3`,\n";
    $sql .= "     PPNAPASTO.`campo anexo4`,\n";
    $sql .= "     PPNAPASTO.`campo anexo5`\n";
    $sql .= " From\n";
    $sql .= "     PPNAPASTO   PPNAPASTO\n";

//Field Related Declarations
$req_ID              = "add_fd0";
$req_TD              = "add_fd1";
$req_ND              = "add_fd2";
$req_PA              = "add_fd3";
$req_SA              = "add_fd4";
$req_PN              = "add_fd5";
$req_SN              = "add_fd6";
$req_FECNAC          = "add_fd7";
$req_SX              = "add_fd8";
$req_NS              = "add_fd9";
$req_FIC3            = "add_fd10";
$req_GP              = "add_fd11";
$req_MENSAJE1        = "add_fd12";
$req_PUNTAJE         = "add_fd13";
$req_Parentesco      = "add_fd15";
$req_Ampliacion_1    = "add_fd16";
$req_Prestadora      = "add_fd17";
$req_Observa_urgencias = "add_fd19";
$req_registra        = "add_fd21";

//Assign Recordset Field Index
$rs_idx_ID           = 0;
$rs_idx_TD           = 1;
$rs_idx_ND           = 2;
$rs_idx_PA           = 3;
$rs_idx_SA           = 4;
$rs_idx_PN           = 5;
$rs_idx_SN           = 6;
$rs_idx_FECNAC       = 7;
$rs_idx_SX           = 8;
$rs_idx_NS           = 9;
$rs_idx_FIC3         = 10;
$rs_idx_GP           = 11;
$rs_idx_MENSAJE1     = 12;
$rs_idx_PUNTAJE      = 13;
$rs_idx_LNPE1        = 14;
$rs_idx_Parentesco   = 15;
$rs_idx_ampliacion1  = 16;
$rs_idx_prestadora   = 17;
$rs_idx_Fecha_Ampliacion = 18;
$rs_idx_observa_urgencias = 19;
$rs_idx_si_esta      = 20;
$rs_idx_usuari_registro = 21;
$rs_idx_campo_anexo1 = 22;
$rs_idx_campo_anexo2 = 23;
$rs_idx_campo_anexo3 = 24;
$rs_idx_campo_anexo4 = 25;
$rs_idx_campo_anexo5 = 26;

// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
if (isset($_POST["act"])) {
   $ProcessForm  = "Y"; 
// >> START OF "before server form processing" [FORMPROCESS001] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before server form processing" [FORMPROCESS001] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
   if ($ProcessForm  == "Y") { 
if (strpos(strtoupper($sql), " WHERE ")) {
   $sqltemp = $sql . " AND (1=0) ";
}else{
   $sqltemp = $sql . " Where (1=0) ";
}
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
// >> START OF "on open connection" [OPENCONN001] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open connection" [OPENCONN001] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
$result = odbc_exec($conn,$sqltemp . " " . $sql_ext)
          or die("Invalid query");
$qry_string = "";
$insert_sql = "";
$value_sql = "";
$i = 0;
$SourceFileUpload = array();
$DestFileUpload = array();
$NewFieldUpload = array();
 
//Set initial value for array
$SourceFileUpload[0] = "";
$DestFileUpload[0] = "";
$NewFieldUpload[0] = "";
$SourceFileUpload[1] = "";
$DestFileUpload[1] = "";
$NewFieldUpload[1] = "";
$SourceFileUpload[2] = "";
$DestFileUpload[2] = "";
$NewFieldUpload[2] = "";
$SourceFileUpload[3] = "";
$DestFileUpload[3] = "";
$NewFieldUpload[3] = "";
$SourceFileUpload[4] = "";
$DestFileUpload[4] = "";
$NewFieldUpload[4] = "";
$SourceFileUpload[5] = "";
$DestFileUpload[5] = "";
$NewFieldUpload[5] = "";
$SourceFileUpload[6] = "";
$DestFileUpload[6] = "";
$NewFieldUpload[6] = "";
$SourceFileUpload[7] = "";
$DestFileUpload[7] = "";
$NewFieldUpload[7] = "";
$SourceFileUpload[8] = "";
$DestFileUpload[8] = "";
$NewFieldUpload[8] = "";
$SourceFileUpload[9] = "";
$DestFileUpload[9] = "";
$NewFieldUpload[9] = "";
$SourceFileUpload[10] = "";
$DestFileUpload[10] = "";
$NewFieldUpload[10] = "";
$SourceFileUpload[11] = "";
$DestFileUpload[11] = "";
$NewFieldUpload[11] = "";
$SourceFileUpload[12] = "";
$DestFileUpload[12] = "";
$NewFieldUpload[12] = "";
$SourceFileUpload[13] = "";
$DestFileUpload[13] = "";
$NewFieldUpload[13] = "";
$SourceFileUpload[14] = "";
$DestFileUpload[14] = "";
$NewFieldUpload[14] = "";
$SourceFileUpload[15] = "";
$DestFileUpload[15] = "";
$NewFieldUpload[15] = "";
$SourceFileUpload[16] = "";
$DestFileUpload[16] = "";
$NewFieldUpload[16] = "";
$SourceFileUpload[17] = "";
$DestFileUpload[17] = "";
$NewFieldUpload[17] = "";
$SourceFileUpload[18] = "";
$DestFileUpload[18] = "";
$NewFieldUpload[18] = "";
 
$i = 0;
while ($i < odbc_num_fields($result)) {
    $meta = odbc_field_name($result, $i + 1);
    $field_name = $meta;
    $field_type = odbc_field_type($result, $i + 1);
    $type_field = "";
    $type_field = returntype($field_type);
    if (qsvalidRequest("search_fd" .$i)) {
        if ($qry_string == "") {
            $qry_string = "search_fd" . $i . "=" . urlencode(stripslashes(qsrequest("search_fd" . $i)));
        } else {
            $qry_string .= "&search_fd" .$i . "=" . urlencode(stripslashes(qsrequest("search_fd" . $i)));
        }
        $hidden_tag .= "<input type=\"hidden\" name=\"search_fd" .$i . "\" value=\"" . qsreplace_html_quote(stripslashes(qsrequest("search_fd" . $i))) . "\">\n";
        if ($qry_string == "") {
            $qry_string = "multisearch_fd" . $i . "=" . urlencode(stripslashes(qsrequest("multisearch_fd" . $i)));
        } else {
            $qry_string .= "&multisearch_fd" .$i . "=" . urlencode(stripslashes(qsrequest("multisearch_fd" . $i)));
        }
        $hidden_tag .= "<input type=\"hidden\" name=\"multisearch_fd" .$i . "\" value=\"" . qsreplace_html_quote(stripslashes(qsrequest("multisearch_fd" . $i))) . "\">\n";
    }
    if (qsvalidRequest("add_fd" .$i) 
       ) {
        $idata = qsrequest("add_fd" . $i);
        if ($meta) {
            if ($type_field == "type_datetime") {
// >> START OF "before add date/time form field to sql (php)" [ITEMBEFADDTOSQLDTM] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add date/time form field to sql (php)" [ITEMBEFADDTOSQLDTM] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]

                    if ($insert_sql == "") {
                        $insert_sql .= $quotechar . $field_name . $quotechar;
                        $value_sql  .= $quotedate . qsconvertdate2ansi($idata,$formatdate[$i],$seperatedate[$i]) .  $quotedate;
                    } else {
                        $insert_sql .= "," . $quotechar . $field_name . $quotechar;
                        $value_sql  .= "," . $quotedate . qsconvertdate2ansi($idata,$formatdate[$i],$seperatedate[$i]) .$quotedate;
                    }
            } elseif ($type_field == "type_integer") {
                $idata = QSConvert2EngNumber($idata); 
// >> START OF "before add integer form field to sql (php)" [ITEMBEFADDTOSQLINT] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add integer form field to sql (php)" [ITEMBEFADDTOSQLINT] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]

                if (is_numeric($idata)) {
                    if ($insert_sql == "") {
                        $insert_sql .= $quotechar . $field_name . $quotechar;
                        $value_sql  .= $idata;
                    } else {
                        $insert_sql .= "," . $quotechar . $field_name . $quotechar;
                        $value_sql  .= "," . $idata;
                    }
                } else {
                    $err_string .= "<strong>Error:</strong>while adding<strong>" . $field_name . "</strong>.<br>";
                    $err_string .= "Description: Type mismatch.<br>";
                }
            } elseif ($type_field == "type_string") {
// >> START OF "before add string form field to sql (php)" [ITEMBEFADDTOSQLSTRING] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add string form field to sql (php)" [ITEMBEFADDTOSQLSTRING] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]

                if ($insert_sql == "") {
                    $insert_sql .= $quotechar . $field_name . $quotechar;
                    $value_sql  .= "'" . ereg_replace("'","''",stripslashes($idata)) . "'";
                } else {
                    $insert_sql .= "," . $quotechar . $field_name . $quotechar;
                    $value_sql  .= ",'" . ereg_replace("'","''",stripslashes($idata)) . "'";
                }
            } else {
// >> START OF "before add other form field to sql (php)" [ITEMBEFADDTOSQLOTHER] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add other form field to sql (php)" [ITEMBEFADDTOSQLOTHER] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]

                if ($insert_sql == "") {
                    $insert_sql .= $quotechar . $field_name . $quotechar;
                    $value_sql  .= "'" . ereg_replace("'","''",stripslashes($idata)) . "'";
                } else {
                    $insert_sql .= "," . $quotechar . $field_name . $quotechar;
                    $value_sql  .= ",'" . ereg_replace("'","''",stripslashes($idata)) . "'";
                }
            }
// >> START OF "after add form field to sql (php)" [ITEMAFTADDTOSQL] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after add form field to sql (php)" [ITEMAFTADDTOSQL] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]

        }
    } else {
        if ((strtolower($field_type) != "int identity")
         && (strtolower($field_type) != "autoincrement")
         && (strtolower($field_type) != "counter")) {
            if ($insert_sql == "") {
              $insert_sql .= $quotechar . $field_name . $quotechar;
              if ($i == 16) { $value_sql  .= "0";  } else
              { $value_sql  .= "null"; }
            } else {
              $insert_sql .= "," . $quotechar . $field_name . $quotechar;
              if ($i == 16) { $value_sql  .= "," . "0";  } else
              { $value_sql  .= ", null"; }
            }
        }
    }
$i++;
}
// >> START OF "before prepare query" [PREPAREQRY001] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before prepare query" [PREPAREQRY001] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
$sql  = "";
$sql  = "insert into PPNAPASTO";
$sql .= " (" . $insert_sql . ")";
$sql .= " values";
$sql .= " (" . $value_sql . ")";
// >> START OF "after prepare query" [PREPAREQRY001] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after prepare query" [PREPAREQRY001] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
#----get submit url page----
    $submiturl = "./lnp.php?";
    if ($result > 0) {odbc_free_result($result);}
    if (!$result = @odbc_exec($conn,$sql)){
        $err_string .= "<strong>Error:</strong>while adding<br>" . odbc_errormsg();
// >> START OF "on add data error" [ADDDATAERR001] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on add data error" [ADDDATAERR001] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
    } else { 
// >> START OF "on add data success" [ADDDATASUCCESS001] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on add data success" [ADDDATASUCCESS001] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
    }
// >> START OF "before upload file" [UPLOAD001] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before upload file" [UPLOAD001] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
    if ($err_string == "") { 
       for ($i = 0; $i < 19; $i++)  
       { 
          if ($SourceFileUpload[$i] <> "") { 
              if (!(move_uploaded_file($SourceFileUpload[$i], $DestFileUpload[$i]))) {    // Upload Fail 
                  $err_string = 	"Cannot upload file! There is problem occured when upload."	; 
// >> START OF "on upload file error" [UPLOADERR001] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on upload file error" [UPLOADERR001] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
                } 
          } //end if  
       } 
    } //end if error string  
// >> START OF "after upload file" [UPLOAD001] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after upload file" [UPLOAD001] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
    if ($err_string == "") {
        if ($qry_string != "") {
            $URL= $submiturl . "&" . $qry_string;
        } else {
            $URL= $submiturl;
        }
        header ("Location: $URL");
        exit;
    }
  } //end if ProcessForm
// >> START OF "after server form processing" [FORMPROCESS001] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after server form processing" [FORMPROCESS001] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
} //end if act
?>
<HTML>
<?php
// >> START OF "before page html" [HTML001] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page html" [HTML001] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
<Title>Add PPNAPASTO</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
<link rel="stylesheet" type="text/css" href="lnp_add.css">
<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>

<!-- The code section below is extracted from [dbQwikSiteInstallPath\Data\Includes\YUI-JSLoader.txt] file -->   
<!-- This file is included in all generated pages, right after JS basic initialization -->   
<!-- If you need more of the Yahoo UI libraries for your own custom use, you may add libraries here. -->   
<!-- This file is included in generated code BEFORE the 'ClientIncludes' Custom Code insertion point. -->
<!-- So you may chose to add other libraries via the 'ClientIncludes' Custom Code insertion point. -->

<!-- Load the YUI Loader scripts needed by dbQwikSite -->   
<script type="text/javascript" src="./js/yahoo-min.js" ></script>
<script type="text/javascript" src="./js/dom-min.js" ></script>
<script type="text/javascript" src="./js/event-min.js" ></script>

<script type="text/javascript">

  // Invoke dbQwikSite Page OnLoad controller as soon as the page is ready 
  // This should always happen first, any user custom-code should run after
  YAHOO.util.Event.onDOMReady( function() { qsPageOnLoadController(); } );  

</script>

<!-- END OF STD-Loader.txt -->

<!-- The code section below is extracted from [dbQwikSiteInstallPath\Data\Includes\STD-Loader.txt] file -->   
<!-- This file is included in all generated pages, right after Javascript basic initialization -->   

<!-- You may write JS File Includes, CSS includes or inline JavaScript code as needed. -->   
<!-- This file is included in generated code BEFORE the 'ClientIncludes' Custom Code insertion point. -->

<!-- Add all your customization below -->

	<link rel="stylesheet" type="text/css" href="./css/ContentLayout.css"></link>


<!-- END OF STD-Loader.txt -->


<script type="text/javascript">

// Declares all constants and arrays
// for all page items used on the page

// Declare Field Indexes for all page items
var qsPageItemsCount = 19
var _ID                                       = 0;
var _TD                                       = 1;
var _ND                                       = 2;
var _PA                                       = 3;
var _SA                                       = 4;
var _PN                                       = 5;
var _SN                                       = 6;
var _FECNAC                                   = 7;
var _SX                                       = 8;
var _NS                                       = 9;
var _FIC3                                     = 10;
var _GP                                       = 11;
var _MENSAJE1                                 = 12;
var _PUNTAJE                                  = 13;
var _Parentesco                               = 14;
var _Ampliacion_1                             = 15;
var _Prestadora                               = 16;
var _Observa_urgencias                        = 17;
var _registra                                 = 18;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_ID] = "ID";
fieldPrompts[_TD] = "TD";
fieldPrompts[_ND] = "ND";
fieldPrompts[_PA] = "PA";
fieldPrompts[_SA] = "SA";
fieldPrompts[_PN] = "PN";
fieldPrompts[_SN] = "SN";
fieldPrompts[_FECNAC] = "FECNAC";
fieldPrompts[_SX] = "SX";
fieldPrompts[_NS] = "NS";
fieldPrompts[_FIC3] = "FIC3";
fieldPrompts[_GP] = "GP";
fieldPrompts[_MENSAJE1] = "MENSAJE1";
fieldPrompts[_PUNTAJE] = "PUNTAJE";
fieldPrompts[_Parentesco] = "Parentesco";
fieldPrompts[_Ampliacion_1] = "Ampliacion 1";
fieldPrompts[_Prestadora] = "Prestadora";
fieldPrompts[_Observa_urgencias] = "Observa urgencias";
fieldPrompts[_registra] = "registra";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_ID] = "ID";
fieldTechNames[_TD] = "TD";
fieldTechNames[_ND] = "ND";
fieldTechNames[_PA] = "PA";
fieldTechNames[_SA] = "SA";
fieldTechNames[_PN] = "PN";
fieldTechNames[_SN] = "SN";
fieldTechNames[_FECNAC] = "FECNAC";
fieldTechNames[_SX] = "SX";
fieldTechNames[_NS] = "NS";
fieldTechNames[_FIC3] = "FIC3";
fieldTechNames[_GP] = "GP";
fieldTechNames[_MENSAJE1] = "MENSAJE1";
fieldTechNames[_PUNTAJE] = "PUNTAJE";
fieldTechNames[_Parentesco] = "Parentesco";
fieldTechNames[_Ampliacion_1] = "Ampliacion_1";
fieldTechNames[_Prestadora] = "Prestadora";
fieldTechNames[_Observa_urgencias] = "Observa_urgencias";
fieldTechNames[_registra] = "registra";

// This function dynamically assigns element 'ID' attributes to all relevant elements
function qsAssignElementIDs() {

  // STEP 1: Assign an ID to all field PROMPTS (TD captions)
  // Scan all table TD tags for those that match field prompts
  var TDs = document.getElementsByTagName("td");
  for (var i=0; i < TDs.length; i++) {
    var element = TDs[i];
    // Check if the TD found is one of the Page Items header
    // This can only be an approximation as some TDs other than the actual field prompts
    // may contain the same caption. In that case all TDs found will carry the same ID.
    if (element.className == "ThRows" || element.className == "TrOdd") {
      for (var f=0; f < qsPageItemsCount; f++) {
        if (element.innerHTML == fieldPrompts[f]) {
            element.id = fieldTechNames[f] + "_caption_cell";
          element.innerHTML = "<div id='" + fieldTechNames[f] + "_caption_div'>" + element.innerHTML + "</div>";
        }
      }
    }
  }

  // STEP 2: Assign an ID to all Input controls on the form
  document.getElementsByName("add_fd0")[0].id = fieldTechNames[_ID];
  document.getElementsByName("add_fd1")[0].id = fieldTechNames[_TD];
  document.getElementsByName("add_fd2")[0].id = fieldTechNames[_ND];
  document.getElementsByName("add_fd3")[0].id = fieldTechNames[_PA];
  document.getElementsByName("add_fd4")[0].id = fieldTechNames[_SA];
  document.getElementsByName("add_fd5")[0].id = fieldTechNames[_PN];
  document.getElementsByName("add_fd6")[0].id = fieldTechNames[_SN];
  document.getElementsByName("add_fd7")[0].id = fieldTechNames[_FECNAC];
  document.getElementsByName("add_fd8")[0].id = fieldTechNames[_SX];
  document.getElementsByName("add_fd9")[0].id = fieldTechNames[_NS];
  document.getElementsByName("add_fd10")[0].id = fieldTechNames[_FIC3];
  document.getElementsByName("add_fd11")[0].id = fieldTechNames[_GP];
  document.getElementsByName("add_fd12")[0].id = fieldTechNames[_MENSAJE1];
  document.getElementsByName("add_fd13")[0].id = fieldTechNames[_PUNTAJE];
  document.getElementsByName("add_fd15")[0].id = fieldTechNames[_Parentesco];
  document.getElementsByName("add_fd16")[0].id = fieldTechNames[_Ampliacion_1];
  document.getElementsByName("add_fd17")[0].id = fieldTechNames[_Prestadora];
  document.getElementsByName("add_fd19")[0].id = fieldTechNames[_Observa_urgencias];
  document.getElementsByName("add_fd21")[0].id = fieldTechNames[_registra];
}

// This function defines object names for all page items used on the page.
// You can refer to these objects in your JavaScript code and avoid getElementById().
// Entry Fields (when present) are accessible via their technical names.
// The prompts of Entry Fields (when present) are accessible using SomeItemName_Prompt object names.
// 
function qsPageItemsAbstraction() {
  qs_form                                  = document.getElementsByName("qs_add_form")[0];   //Define Form Object by Name.
  pgitm_ID                                 = document.getElementsByName("add_fd0")[0];
  pgitm_TD                                 = document.getElementsByName("add_fd1")[0];
  pgitm_ND                                 = document.getElementsByName("add_fd2")[0];
  pgitm_PA                                 = document.getElementsByName("add_fd3")[0];
  pgitm_SA                                 = document.getElementsByName("add_fd4")[0];
  pgitm_PN                                 = document.getElementsByName("add_fd5")[0];
  pgitm_SN                                 = document.getElementsByName("add_fd6")[0];
  pgitm_FECNAC                             = document.getElementsByName("add_fd7")[0];
  pgitm_SX                                 = document.getElementsByName("add_fd8")[0];
  pgitm_NS                                 = document.getElementsByName("add_fd9")[0];
  pgitm_FIC3                               = document.getElementsByName("add_fd10")[0];
  pgitm_GP                                 = document.getElementsByName("add_fd11")[0];
  pgitm_MENSAJE1                           = document.getElementsByName("add_fd12")[0];
  pgitm_PUNTAJE                            = document.getElementsByName("add_fd13")[0];
  pgitm_Parentesco                         = document.getElementsByName("add_fd15")[0];
  pgitm_Ampliacion_1                       = document.getElementsByName("add_fd16")[0];
  pgitm_Prestadora                         = document.getElementsByName("add_fd17")[0];
  pgitm_Observa_urgencias                  = document.getElementsByName("add_fd19")[0];
  pgitm_registra                           = document.getElementsByName("add_fd21")[0];
}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<!-- >> START OF "Add PPNAPASTO -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599]-->
<!-- << END OF "Add PPNAPASTO -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599]-->




<script language="javascript">
function Trim(s){
    var temp = " ";
    var i = 0;
    while ((temp == " ") && (i <= s.length)) {
        temp = s.charAt(i);
        i++;
    }
    s = s.substring(i - 1, s.length);
    return(s);
}
function check(frm) {
    var szAlert = "Invalid\n";
    var nIndex = 0;
    if(nIndex > 0) {
       	alert(szAlert) ;
      	return false ;
    }
    return true ;
}
</script>
<script src="validate.js"></script>

<script>

function usrEvent__Add_LNP__onload() {
  // >> START OF "Add PPNAPASTO -> On Load" [onload] [PAGEEVENT] [START] [JS] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599]
  // << END OF "Add PPNAPASTO -> On Load" [onload] [PAGEEVENT] [START] [JS] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599]
}



function usrEvent__Add_LNP__onunload() {
  // >> START OF "Add PPNAPASTO -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599]
  // << END OF "Add PPNAPASTO -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599]
}



function usrEvent__Add_LNP__onresize() {
  // >> START OF "Add PPNAPASTO -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599]
  // << END OF "Add PPNAPASTO -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599]
}



// This function controls the OnUnload event dispatching
function qsPageOnUnloadController() {   
}



// This function controls the OnResize event dispatching
function qsPageOnResizeController() {   
   var lastResult = false                              
   return true;                                        
}                                                      



// This function controls the OnLoad events dispatching
function qsPageOnLoadController() {   
   var lastResult = false                              

   // Invoke the technical field names abstraction initialization
   qsPageItemsAbstraction();


   // Invoke the Element IDs assignment function
   qsAssignElementIDs();

   // Invoke the Page Items custom events assignments
   qsAssignPageItemEvents();
   // Assign Event Handlers for page-level events
   YAHOO.util.Event.addListener(window, "beforeunload", qsPageOnUnloadController);
   YAHOO.util.Event.addListener(window, "resize", qsPageOnResizeController);
   // Set focus on first enterable page item available
  pgitm_ID.focus();
   return true;                                        
}                                                      


function usrEvent__ID__onfocus(HTMLElement) {
  // >> START OF "ID -> On Focus" [onfocus] [ID] [START] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
  // << END OF "ID -> On Focus" [onfocus] [ID] [STOP] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
}
function usrEvent__ID__onblur(HTMLElement) {
  // >> START OF "ID -> On Blur (loss of focus)" [onblur] [ID] [START] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
  // << END OF "ID -> On Blur (loss of focus)" [onblur] [ID] [STOP] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
}
function usrEvent__ID__onclick(HTMLElement) {
  // >> START OF "ID -> On Click" [onclick] [ID] [START] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
  // << END OF "ID -> On Click" [onclick] [ID] [STOP] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
}
function usrEvent__ID__ondblclick(HTMLElement) {
  // >> START OF "ID -> On Double Click" [ondblclick] [ID] [START] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
  // << END OF "ID -> On Double Click" [ondblclick] [ID] [STOP] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
}
function usrEvent__ID__onkeydown(HTMLElement) {
  // >> START OF "ID -> On Key Down" [onkeydown] [ID] [START] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
  // << END OF "ID -> On Key Down" [onkeydown] [ID] [STOP] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
}
function usrEvent__ID__onkeypress(HTMLElement) {
  // >> START OF "ID -> On Key Press" [onkeypress] [ID] [START] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
  // << END OF "ID -> On Key Press" [onkeypress] [ID] [STOP] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
}
function usrEvent__ID__onkeyup(HTMLElement) {
  // >> START OF "ID -> On Key Up" [onkeyup] [ID] [START] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
  // << END OF "ID -> On Key Up" [onkeyup] [ID] [STOP] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
}
function usrEvent__ID__onchange(HTMLElement) {
  // >> START OF "ID -> On Change" [onchange] [ID] [START] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
  // << END OF "ID -> On Change" [onchange] [ID] [STOP] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
}
function usrEvent__ID__onmousedown(HTMLElement) {
  // >> START OF "ID -> On Mouse Down" [onmousedown] [ID] [START] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
  // << END OF "ID -> On Mouse Down" [onmousedown] [ID] [STOP] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
}
function usrEvent__ID__onmousemove(HTMLElement) {
  // >> START OF "ID -> On Mouse Move" [onmousemove] [ID] [START] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
  // << END OF "ID -> On Mouse Move" [onmousemove] [ID] [STOP] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
}
function usrEvent__ID__onmouseout(HTMLElement) {
  // >> START OF "ID -> On Mouse Out" [onmouseout] [ID] [START] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
  // << END OF "ID -> On Mouse Out" [onmouseout] [ID] [STOP] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
}
function usrEvent__ID__onmouseover(HTMLElement) {
  // >> START OF "ID -> On Mouse Over" [onmouseover] [ID] [START] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
  // << END OF "ID -> On Mouse Over" [onmouseover] [ID] [STOP] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
}
function usrEvent__ID__onmouseup(HTMLElement) {
  // >> START OF "ID -> On Mouse Up" [onmouseup] [ID] [START] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
  // << END OF "ID -> On Mouse Up" [onmouseup] [ID] [STOP] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
}
function usrEvent__ID__onselect(HTMLElement) {
  // >> START OF "ID -> On Select" [onselect] [ID] [START] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
  // << END OF "ID -> On Select" [onselect] [ID] [STOP] [JS] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D]
}

function usrEvent__TD__onfocus(HTMLElement) {
  // >> START OF "TD -> On Focus" [onfocus] [TD] [START] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
  // << END OF "TD -> On Focus" [onfocus] [TD] [STOP] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
}
function usrEvent__TD__onblur(HTMLElement) {
  // >> START OF "TD -> On Blur (loss of focus)" [onblur] [TD] [START] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
  // << END OF "TD -> On Blur (loss of focus)" [onblur] [TD] [STOP] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
}
function usrEvent__TD__onclick(HTMLElement) {
  // >> START OF "TD -> On Click" [onclick] [TD] [START] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
  // << END OF "TD -> On Click" [onclick] [TD] [STOP] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
}
function usrEvent__TD__ondblclick(HTMLElement) {
  // >> START OF "TD -> On Double Click" [ondblclick] [TD] [START] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
  // << END OF "TD -> On Double Click" [ondblclick] [TD] [STOP] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
}
function usrEvent__TD__onkeydown(HTMLElement) {
  // >> START OF "TD -> On Key Down" [onkeydown] [TD] [START] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
  // << END OF "TD -> On Key Down" [onkeydown] [TD] [STOP] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
}
function usrEvent__TD__onkeypress(HTMLElement) {
  // >> START OF "TD -> On Key Press" [onkeypress] [TD] [START] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
  // << END OF "TD -> On Key Press" [onkeypress] [TD] [STOP] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
}
function usrEvent__TD__onkeyup(HTMLElement) {
  // >> START OF "TD -> On Key Up" [onkeyup] [TD] [START] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
  // << END OF "TD -> On Key Up" [onkeyup] [TD] [STOP] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
}
function usrEvent__TD__onchange(HTMLElement) {
  // >> START OF "TD -> On Change" [onchange] [TD] [START] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
  // << END OF "TD -> On Change" [onchange] [TD] [STOP] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
}
function usrEvent__TD__onmousedown(HTMLElement) {
  // >> START OF "TD -> On Mouse Down" [onmousedown] [TD] [START] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
  // << END OF "TD -> On Mouse Down" [onmousedown] [TD] [STOP] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
}
function usrEvent__TD__onmousemove(HTMLElement) {
  // >> START OF "TD -> On Mouse Move" [onmousemove] [TD] [START] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
  // << END OF "TD -> On Mouse Move" [onmousemove] [TD] [STOP] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
}
function usrEvent__TD__onmouseout(HTMLElement) {
  // >> START OF "TD -> On Mouse Out" [onmouseout] [TD] [START] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
  // << END OF "TD -> On Mouse Out" [onmouseout] [TD] [STOP] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
}
function usrEvent__TD__onmouseover(HTMLElement) {
  // >> START OF "TD -> On Mouse Over" [onmouseover] [TD] [START] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
  // << END OF "TD -> On Mouse Over" [onmouseover] [TD] [STOP] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
}
function usrEvent__TD__onmouseup(HTMLElement) {
  // >> START OF "TD -> On Mouse Up" [onmouseup] [TD] [START] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
  // << END OF "TD -> On Mouse Up" [onmouseup] [TD] [STOP] [JS] [43BCAE34-5CB9-4DF0-B282-5E077EA43816]
}

function usrEvent__ND__onfocus(HTMLElement) {
  // >> START OF "ND -> On Focus" [onfocus] [ND] [START] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
  // << END OF "ND -> On Focus" [onfocus] [ND] [STOP] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
}
function usrEvent__ND__onblur(HTMLElement) {
  // >> START OF "ND -> On Blur (loss of focus)" [onblur] [ND] [START] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
  // << END OF "ND -> On Blur (loss of focus)" [onblur] [ND] [STOP] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
}
function usrEvent__ND__onclick(HTMLElement) {
  // >> START OF "ND -> On Click" [onclick] [ND] [START] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
  // << END OF "ND -> On Click" [onclick] [ND] [STOP] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
}
function usrEvent__ND__ondblclick(HTMLElement) {
  // >> START OF "ND -> On Double Click" [ondblclick] [ND] [START] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
  // << END OF "ND -> On Double Click" [ondblclick] [ND] [STOP] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
}
function usrEvent__ND__onkeydown(HTMLElement) {
  // >> START OF "ND -> On Key Down" [onkeydown] [ND] [START] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
  // << END OF "ND -> On Key Down" [onkeydown] [ND] [STOP] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
}
function usrEvent__ND__onkeypress(HTMLElement) {
  // >> START OF "ND -> On Key Press" [onkeypress] [ND] [START] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
  // << END OF "ND -> On Key Press" [onkeypress] [ND] [STOP] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
}
function usrEvent__ND__onkeyup(HTMLElement) {
  // >> START OF "ND -> On Key Up" [onkeyup] [ND] [START] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
  // << END OF "ND -> On Key Up" [onkeyup] [ND] [STOP] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
}
function usrEvent__ND__onchange(HTMLElement) {
  // >> START OF "ND -> On Change" [onchange] [ND] [START] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
  // << END OF "ND -> On Change" [onchange] [ND] [STOP] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
}
function usrEvent__ND__onmousedown(HTMLElement) {
  // >> START OF "ND -> On Mouse Down" [onmousedown] [ND] [START] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
  // << END OF "ND -> On Mouse Down" [onmousedown] [ND] [STOP] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
}
function usrEvent__ND__onmousemove(HTMLElement) {
  // >> START OF "ND -> On Mouse Move" [onmousemove] [ND] [START] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
  // << END OF "ND -> On Mouse Move" [onmousemove] [ND] [STOP] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
}
function usrEvent__ND__onmouseout(HTMLElement) {
  // >> START OF "ND -> On Mouse Out" [onmouseout] [ND] [START] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
  // << END OF "ND -> On Mouse Out" [onmouseout] [ND] [STOP] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
}
function usrEvent__ND__onmouseover(HTMLElement) {
  // >> START OF "ND -> On Mouse Over" [onmouseover] [ND] [START] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
  // << END OF "ND -> On Mouse Over" [onmouseover] [ND] [STOP] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
}
function usrEvent__ND__onmouseup(HTMLElement) {
  // >> START OF "ND -> On Mouse Up" [onmouseup] [ND] [START] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
  // << END OF "ND -> On Mouse Up" [onmouseup] [ND] [STOP] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
}
function usrEvent__ND__onselect(HTMLElement) {
  // >> START OF "ND -> On Select" [onselect] [ND] [START] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
  // << END OF "ND -> On Select" [onselect] [ND] [STOP] [JS] [D43490FA-EC01-4380-BBE8-7A1660C867A8]
}

function usrEvent__PA__onfocus(HTMLElement) {
  // >> START OF "PA -> On Focus" [onfocus] [PA] [START] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
  // << END OF "PA -> On Focus" [onfocus] [PA] [STOP] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
}
function usrEvent__PA__onblur(HTMLElement) {
  // >> START OF "PA -> On Blur (loss of focus)" [onblur] [PA] [START] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
  // << END OF "PA -> On Blur (loss of focus)" [onblur] [PA] [STOP] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
}
function usrEvent__PA__onclick(HTMLElement) {
  // >> START OF "PA -> On Click" [onclick] [PA] [START] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
  // << END OF "PA -> On Click" [onclick] [PA] [STOP] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
}
function usrEvent__PA__ondblclick(HTMLElement) {
  // >> START OF "PA -> On Double Click" [ondblclick] [PA] [START] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
  // << END OF "PA -> On Double Click" [ondblclick] [PA] [STOP] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
}
function usrEvent__PA__onkeydown(HTMLElement) {
  // >> START OF "PA -> On Key Down" [onkeydown] [PA] [START] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
  // << END OF "PA -> On Key Down" [onkeydown] [PA] [STOP] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
}
function usrEvent__PA__onkeypress(HTMLElement) {
  // >> START OF "PA -> On Key Press" [onkeypress] [PA] [START] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
  // << END OF "PA -> On Key Press" [onkeypress] [PA] [STOP] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
}
function usrEvent__PA__onkeyup(HTMLElement) {
  // >> START OF "PA -> On Key Up" [onkeyup] [PA] [START] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
  // << END OF "PA -> On Key Up" [onkeyup] [PA] [STOP] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
}
function usrEvent__PA__onchange(HTMLElement) {
  // >> START OF "PA -> On Change" [onchange] [PA] [START] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
  // << END OF "PA -> On Change" [onchange] [PA] [STOP] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
}
function usrEvent__PA__onmousedown(HTMLElement) {
  // >> START OF "PA -> On Mouse Down" [onmousedown] [PA] [START] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
  // << END OF "PA -> On Mouse Down" [onmousedown] [PA] [STOP] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
}
function usrEvent__PA__onmousemove(HTMLElement) {
  // >> START OF "PA -> On Mouse Move" [onmousemove] [PA] [START] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
  // << END OF "PA -> On Mouse Move" [onmousemove] [PA] [STOP] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
}
function usrEvent__PA__onmouseout(HTMLElement) {
  // >> START OF "PA -> On Mouse Out" [onmouseout] [PA] [START] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
  // << END OF "PA -> On Mouse Out" [onmouseout] [PA] [STOP] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
}
function usrEvent__PA__onmouseover(HTMLElement) {
  // >> START OF "PA -> On Mouse Over" [onmouseover] [PA] [START] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
  // << END OF "PA -> On Mouse Over" [onmouseover] [PA] [STOP] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
}
function usrEvent__PA__onmouseup(HTMLElement) {
  // >> START OF "PA -> On Mouse Up" [onmouseup] [PA] [START] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
  // << END OF "PA -> On Mouse Up" [onmouseup] [PA] [STOP] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
}
function usrEvent__PA__onselect(HTMLElement) {
  // >> START OF "PA -> On Select" [onselect] [PA] [START] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
  // << END OF "PA -> On Select" [onselect] [PA] [STOP] [JS] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F]
}

function usrEvent__SA__onfocus(HTMLElement) {
  // >> START OF "SA -> On Focus" [onfocus] [SA] [START] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
  // << END OF "SA -> On Focus" [onfocus] [SA] [STOP] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
}
function usrEvent__SA__onblur(HTMLElement) {
  // >> START OF "SA -> On Blur (loss of focus)" [onblur] [SA] [START] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
  // << END OF "SA -> On Blur (loss of focus)" [onblur] [SA] [STOP] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
}
function usrEvent__SA__onclick(HTMLElement) {
  // >> START OF "SA -> On Click" [onclick] [SA] [START] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
  // << END OF "SA -> On Click" [onclick] [SA] [STOP] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
}
function usrEvent__SA__ondblclick(HTMLElement) {
  // >> START OF "SA -> On Double Click" [ondblclick] [SA] [START] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
  // << END OF "SA -> On Double Click" [ondblclick] [SA] [STOP] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
}
function usrEvent__SA__onkeydown(HTMLElement) {
  // >> START OF "SA -> On Key Down" [onkeydown] [SA] [START] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
  // << END OF "SA -> On Key Down" [onkeydown] [SA] [STOP] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
}
function usrEvent__SA__onkeypress(HTMLElement) {
  // >> START OF "SA -> On Key Press" [onkeypress] [SA] [START] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
  // << END OF "SA -> On Key Press" [onkeypress] [SA] [STOP] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
}
function usrEvent__SA__onkeyup(HTMLElement) {
  // >> START OF "SA -> On Key Up" [onkeyup] [SA] [START] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
  // << END OF "SA -> On Key Up" [onkeyup] [SA] [STOP] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
}
function usrEvent__SA__onchange(HTMLElement) {
  // >> START OF "SA -> On Change" [onchange] [SA] [START] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
  // << END OF "SA -> On Change" [onchange] [SA] [STOP] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
}
function usrEvent__SA__onmousedown(HTMLElement) {
  // >> START OF "SA -> On Mouse Down" [onmousedown] [SA] [START] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
  // << END OF "SA -> On Mouse Down" [onmousedown] [SA] [STOP] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
}
function usrEvent__SA__onmousemove(HTMLElement) {
  // >> START OF "SA -> On Mouse Move" [onmousemove] [SA] [START] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
  // << END OF "SA -> On Mouse Move" [onmousemove] [SA] [STOP] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
}
function usrEvent__SA__onmouseout(HTMLElement) {
  // >> START OF "SA -> On Mouse Out" [onmouseout] [SA] [START] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
  // << END OF "SA -> On Mouse Out" [onmouseout] [SA] [STOP] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
}
function usrEvent__SA__onmouseover(HTMLElement) {
  // >> START OF "SA -> On Mouse Over" [onmouseover] [SA] [START] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
  // << END OF "SA -> On Mouse Over" [onmouseover] [SA] [STOP] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
}
function usrEvent__SA__onmouseup(HTMLElement) {
  // >> START OF "SA -> On Mouse Up" [onmouseup] [SA] [START] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
  // << END OF "SA -> On Mouse Up" [onmouseup] [SA] [STOP] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
}
function usrEvent__SA__onselect(HTMLElement) {
  // >> START OF "SA -> On Select" [onselect] [SA] [START] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
  // << END OF "SA -> On Select" [onselect] [SA] [STOP] [JS] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC]
}

function usrEvent__PN__onfocus(HTMLElement) {
  // >> START OF "PN -> On Focus" [onfocus] [PN] [START] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
  // << END OF "PN -> On Focus" [onfocus] [PN] [STOP] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
}
function usrEvent__PN__onblur(HTMLElement) {
  // >> START OF "PN -> On Blur (loss of focus)" [onblur] [PN] [START] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
  // << END OF "PN -> On Blur (loss of focus)" [onblur] [PN] [STOP] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
}
function usrEvent__PN__onclick(HTMLElement) {
  // >> START OF "PN -> On Click" [onclick] [PN] [START] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
  // << END OF "PN -> On Click" [onclick] [PN] [STOP] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
}
function usrEvent__PN__ondblclick(HTMLElement) {
  // >> START OF "PN -> On Double Click" [ondblclick] [PN] [START] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
  // << END OF "PN -> On Double Click" [ondblclick] [PN] [STOP] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
}
function usrEvent__PN__onkeydown(HTMLElement) {
  // >> START OF "PN -> On Key Down" [onkeydown] [PN] [START] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
  // << END OF "PN -> On Key Down" [onkeydown] [PN] [STOP] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
}
function usrEvent__PN__onkeypress(HTMLElement) {
  // >> START OF "PN -> On Key Press" [onkeypress] [PN] [START] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
  // << END OF "PN -> On Key Press" [onkeypress] [PN] [STOP] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
}
function usrEvent__PN__onkeyup(HTMLElement) {
  // >> START OF "PN -> On Key Up" [onkeyup] [PN] [START] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
  // << END OF "PN -> On Key Up" [onkeyup] [PN] [STOP] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
}
function usrEvent__PN__onchange(HTMLElement) {
  // >> START OF "PN -> On Change" [onchange] [PN] [START] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
  // << END OF "PN -> On Change" [onchange] [PN] [STOP] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
}
function usrEvent__PN__onmousedown(HTMLElement) {
  // >> START OF "PN -> On Mouse Down" [onmousedown] [PN] [START] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
  // << END OF "PN -> On Mouse Down" [onmousedown] [PN] [STOP] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
}
function usrEvent__PN__onmousemove(HTMLElement) {
  // >> START OF "PN -> On Mouse Move" [onmousemove] [PN] [START] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
  // << END OF "PN -> On Mouse Move" [onmousemove] [PN] [STOP] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
}
function usrEvent__PN__onmouseout(HTMLElement) {
  // >> START OF "PN -> On Mouse Out" [onmouseout] [PN] [START] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
  // << END OF "PN -> On Mouse Out" [onmouseout] [PN] [STOP] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
}
function usrEvent__PN__onmouseover(HTMLElement) {
  // >> START OF "PN -> On Mouse Over" [onmouseover] [PN] [START] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
  // << END OF "PN -> On Mouse Over" [onmouseover] [PN] [STOP] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
}
function usrEvent__PN__onmouseup(HTMLElement) {
  // >> START OF "PN -> On Mouse Up" [onmouseup] [PN] [START] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
  // << END OF "PN -> On Mouse Up" [onmouseup] [PN] [STOP] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
}
function usrEvent__PN__onselect(HTMLElement) {
  // >> START OF "PN -> On Select" [onselect] [PN] [START] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
  // << END OF "PN -> On Select" [onselect] [PN] [STOP] [JS] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679]
}

function usrEvent__SN__onfocus(HTMLElement) {
  // >> START OF "SN -> On Focus" [onfocus] [SN] [START] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
  // << END OF "SN -> On Focus" [onfocus] [SN] [STOP] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
}
function usrEvent__SN__onblur(HTMLElement) {
  // >> START OF "SN -> On Blur (loss of focus)" [onblur] [SN] [START] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
  // << END OF "SN -> On Blur (loss of focus)" [onblur] [SN] [STOP] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
}
function usrEvent__SN__onclick(HTMLElement) {
  // >> START OF "SN -> On Click" [onclick] [SN] [START] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
  // << END OF "SN -> On Click" [onclick] [SN] [STOP] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
}
function usrEvent__SN__ondblclick(HTMLElement) {
  // >> START OF "SN -> On Double Click" [ondblclick] [SN] [START] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
  // << END OF "SN -> On Double Click" [ondblclick] [SN] [STOP] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
}
function usrEvent__SN__onkeydown(HTMLElement) {
  // >> START OF "SN -> On Key Down" [onkeydown] [SN] [START] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
  // << END OF "SN -> On Key Down" [onkeydown] [SN] [STOP] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
}
function usrEvent__SN__onkeypress(HTMLElement) {
  // >> START OF "SN -> On Key Press" [onkeypress] [SN] [START] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
  // << END OF "SN -> On Key Press" [onkeypress] [SN] [STOP] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
}
function usrEvent__SN__onkeyup(HTMLElement) {
  // >> START OF "SN -> On Key Up" [onkeyup] [SN] [START] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
  // << END OF "SN -> On Key Up" [onkeyup] [SN] [STOP] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
}
function usrEvent__SN__onchange(HTMLElement) {
  // >> START OF "SN -> On Change" [onchange] [SN] [START] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
  // << END OF "SN -> On Change" [onchange] [SN] [STOP] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
}
function usrEvent__SN__onmousedown(HTMLElement) {
  // >> START OF "SN -> On Mouse Down" [onmousedown] [SN] [START] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
  // << END OF "SN -> On Mouse Down" [onmousedown] [SN] [STOP] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
}
function usrEvent__SN__onmousemove(HTMLElement) {
  // >> START OF "SN -> On Mouse Move" [onmousemove] [SN] [START] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
  // << END OF "SN -> On Mouse Move" [onmousemove] [SN] [STOP] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
}
function usrEvent__SN__onmouseout(HTMLElement) {
  // >> START OF "SN -> On Mouse Out" [onmouseout] [SN] [START] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
  // << END OF "SN -> On Mouse Out" [onmouseout] [SN] [STOP] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
}
function usrEvent__SN__onmouseover(HTMLElement) {
  // >> START OF "SN -> On Mouse Over" [onmouseover] [SN] [START] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
  // << END OF "SN -> On Mouse Over" [onmouseover] [SN] [STOP] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
}
function usrEvent__SN__onmouseup(HTMLElement) {
  // >> START OF "SN -> On Mouse Up" [onmouseup] [SN] [START] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
  // << END OF "SN -> On Mouse Up" [onmouseup] [SN] [STOP] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
}
function usrEvent__SN__onselect(HTMLElement) {
  // >> START OF "SN -> On Select" [onselect] [SN] [START] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
  // << END OF "SN -> On Select" [onselect] [SN] [STOP] [JS] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2]
}

function usrEvent__FECNAC__onfocus(HTMLElement) {
  // >> START OF "FECNAC -> On Focus" [onfocus] [FECNAC] [START] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
  // << END OF "FECNAC -> On Focus" [onfocus] [FECNAC] [STOP] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
}
function usrEvent__FECNAC__onblur(HTMLElement) {
  // >> START OF "FECNAC -> On Blur (loss of focus)" [onblur] [FECNAC] [START] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
  // << END OF "FECNAC -> On Blur (loss of focus)" [onblur] [FECNAC] [STOP] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
}
function usrEvent__FECNAC__onclick(HTMLElement) {
  // >> START OF "FECNAC -> On Click" [onclick] [FECNAC] [START] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
  // << END OF "FECNAC -> On Click" [onclick] [FECNAC] [STOP] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
}
function usrEvent__FECNAC__ondblclick(HTMLElement) {
  // >> START OF "FECNAC -> On Double Click" [ondblclick] [FECNAC] [START] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
  // << END OF "FECNAC -> On Double Click" [ondblclick] [FECNAC] [STOP] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
}
function usrEvent__FECNAC__onkeydown(HTMLElement) {
  // >> START OF "FECNAC -> On Key Down" [onkeydown] [FECNAC] [START] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
  // << END OF "FECNAC -> On Key Down" [onkeydown] [FECNAC] [STOP] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
}
function usrEvent__FECNAC__onkeypress(HTMLElement) {
  // >> START OF "FECNAC -> On Key Press" [onkeypress] [FECNAC] [START] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
  // << END OF "FECNAC -> On Key Press" [onkeypress] [FECNAC] [STOP] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
}
function usrEvent__FECNAC__onkeyup(HTMLElement) {
  // >> START OF "FECNAC -> On Key Up" [onkeyup] [FECNAC] [START] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
  // << END OF "FECNAC -> On Key Up" [onkeyup] [FECNAC] [STOP] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
}
function usrEvent__FECNAC__onchange(HTMLElement) {
  // >> START OF "FECNAC -> On Change" [onchange] [FECNAC] [START] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
  // << END OF "FECNAC -> On Change" [onchange] [FECNAC] [STOP] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
}
function usrEvent__FECNAC__onmousedown(HTMLElement) {
  // >> START OF "FECNAC -> On Mouse Down" [onmousedown] [FECNAC] [START] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
  // << END OF "FECNAC -> On Mouse Down" [onmousedown] [FECNAC] [STOP] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
}
function usrEvent__FECNAC__onmousemove(HTMLElement) {
  // >> START OF "FECNAC -> On Mouse Move" [onmousemove] [FECNAC] [START] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
  // << END OF "FECNAC -> On Mouse Move" [onmousemove] [FECNAC] [STOP] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
}
function usrEvent__FECNAC__onmouseout(HTMLElement) {
  // >> START OF "FECNAC -> On Mouse Out" [onmouseout] [FECNAC] [START] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
  // << END OF "FECNAC -> On Mouse Out" [onmouseout] [FECNAC] [STOP] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
}
function usrEvent__FECNAC__onmouseover(HTMLElement) {
  // >> START OF "FECNAC -> On Mouse Over" [onmouseover] [FECNAC] [START] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
  // << END OF "FECNAC -> On Mouse Over" [onmouseover] [FECNAC] [STOP] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
}
function usrEvent__FECNAC__onmouseup(HTMLElement) {
  // >> START OF "FECNAC -> On Mouse Up" [onmouseup] [FECNAC] [START] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
  // << END OF "FECNAC -> On Mouse Up" [onmouseup] [FECNAC] [STOP] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
}
function usrEvent__FECNAC__onselect(HTMLElement) {
  // >> START OF "FECNAC -> On Select" [onselect] [FECNAC] [START] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
  // << END OF "FECNAC -> On Select" [onselect] [FECNAC] [STOP] [JS] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF]
}

function usrEvent__SX__onfocus(HTMLElement) {
  // >> START OF "SX -> On Focus" [onfocus] [SX] [START] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
  // << END OF "SX -> On Focus" [onfocus] [SX] [STOP] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
}
function usrEvent__SX__onblur(HTMLElement) {
  // >> START OF "SX -> On Blur (loss of focus)" [onblur] [SX] [START] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
  // << END OF "SX -> On Blur (loss of focus)" [onblur] [SX] [STOP] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
}
function usrEvent__SX__onclick(HTMLElement) {
  // >> START OF "SX -> On Click" [onclick] [SX] [START] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
  // << END OF "SX -> On Click" [onclick] [SX] [STOP] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
}
function usrEvent__SX__ondblclick(HTMLElement) {
  // >> START OF "SX -> On Double Click" [ondblclick] [SX] [START] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
  // << END OF "SX -> On Double Click" [ondblclick] [SX] [STOP] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
}
function usrEvent__SX__onkeydown(HTMLElement) {
  // >> START OF "SX -> On Key Down" [onkeydown] [SX] [START] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
  // << END OF "SX -> On Key Down" [onkeydown] [SX] [STOP] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
}
function usrEvent__SX__onkeypress(HTMLElement) {
  // >> START OF "SX -> On Key Press" [onkeypress] [SX] [START] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
  // << END OF "SX -> On Key Press" [onkeypress] [SX] [STOP] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
}
function usrEvent__SX__onkeyup(HTMLElement) {
  // >> START OF "SX -> On Key Up" [onkeyup] [SX] [START] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
  // << END OF "SX -> On Key Up" [onkeyup] [SX] [STOP] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
}
function usrEvent__SX__onchange(HTMLElement) {
  // >> START OF "SX -> On Change" [onchange] [SX] [START] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
  // << END OF "SX -> On Change" [onchange] [SX] [STOP] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
}
function usrEvent__SX__onmousedown(HTMLElement) {
  // >> START OF "SX -> On Mouse Down" [onmousedown] [SX] [START] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
  // << END OF "SX -> On Mouse Down" [onmousedown] [SX] [STOP] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
}
function usrEvent__SX__onmousemove(HTMLElement) {
  // >> START OF "SX -> On Mouse Move" [onmousemove] [SX] [START] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
  // << END OF "SX -> On Mouse Move" [onmousemove] [SX] [STOP] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
}
function usrEvent__SX__onmouseout(HTMLElement) {
  // >> START OF "SX -> On Mouse Out" [onmouseout] [SX] [START] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
  // << END OF "SX -> On Mouse Out" [onmouseout] [SX] [STOP] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
}
function usrEvent__SX__onmouseover(HTMLElement) {
  // >> START OF "SX -> On Mouse Over" [onmouseover] [SX] [START] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
  // << END OF "SX -> On Mouse Over" [onmouseover] [SX] [STOP] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
}
function usrEvent__SX__onmouseup(HTMLElement) {
  // >> START OF "SX -> On Mouse Up" [onmouseup] [SX] [START] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
  // << END OF "SX -> On Mouse Up" [onmouseup] [SX] [STOP] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
}
function usrEvent__SX__onselect(HTMLElement) {
  // >> START OF "SX -> On Select" [onselect] [SX] [START] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
  // << END OF "SX -> On Select" [onselect] [SX] [STOP] [JS] [2EF7EE55-0B37-4866-871E-58F40529698E]
}

function usrEvent__NS__onfocus(HTMLElement) {
  // >> START OF "NS -> On Focus" [onfocus] [NS] [START] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
  // << END OF "NS -> On Focus" [onfocus] [NS] [STOP] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
}
function usrEvent__NS__onblur(HTMLElement) {
  // >> START OF "NS -> On Blur (loss of focus)" [onblur] [NS] [START] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
  // << END OF "NS -> On Blur (loss of focus)" [onblur] [NS] [STOP] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
}
function usrEvent__NS__onclick(HTMLElement) {
  // >> START OF "NS -> On Click" [onclick] [NS] [START] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
  // << END OF "NS -> On Click" [onclick] [NS] [STOP] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
}
function usrEvent__NS__ondblclick(HTMLElement) {
  // >> START OF "NS -> On Double Click" [ondblclick] [NS] [START] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
  // << END OF "NS -> On Double Click" [ondblclick] [NS] [STOP] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
}
function usrEvent__NS__onkeydown(HTMLElement) {
  // >> START OF "NS -> On Key Down" [onkeydown] [NS] [START] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
  // << END OF "NS -> On Key Down" [onkeydown] [NS] [STOP] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
}
function usrEvent__NS__onkeypress(HTMLElement) {
  // >> START OF "NS -> On Key Press" [onkeypress] [NS] [START] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
  // << END OF "NS -> On Key Press" [onkeypress] [NS] [STOP] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
}
function usrEvent__NS__onkeyup(HTMLElement) {
  // >> START OF "NS -> On Key Up" [onkeyup] [NS] [START] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
  // << END OF "NS -> On Key Up" [onkeyup] [NS] [STOP] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
}
function usrEvent__NS__onchange(HTMLElement) {
  // >> START OF "NS -> On Change" [onchange] [NS] [START] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
  // << END OF "NS -> On Change" [onchange] [NS] [STOP] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
}
function usrEvent__NS__onmousedown(HTMLElement) {
  // >> START OF "NS -> On Mouse Down" [onmousedown] [NS] [START] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
  // << END OF "NS -> On Mouse Down" [onmousedown] [NS] [STOP] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
}
function usrEvent__NS__onmousemove(HTMLElement) {
  // >> START OF "NS -> On Mouse Move" [onmousemove] [NS] [START] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
  // << END OF "NS -> On Mouse Move" [onmousemove] [NS] [STOP] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
}
function usrEvent__NS__onmouseout(HTMLElement) {
  // >> START OF "NS -> On Mouse Out" [onmouseout] [NS] [START] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
  // << END OF "NS -> On Mouse Out" [onmouseout] [NS] [STOP] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
}
function usrEvent__NS__onmouseover(HTMLElement) {
  // >> START OF "NS -> On Mouse Over" [onmouseover] [NS] [START] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
  // << END OF "NS -> On Mouse Over" [onmouseover] [NS] [STOP] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
}
function usrEvent__NS__onmouseup(HTMLElement) {
  // >> START OF "NS -> On Mouse Up" [onmouseup] [NS] [START] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
  // << END OF "NS -> On Mouse Up" [onmouseup] [NS] [STOP] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
}
function usrEvent__NS__onselect(HTMLElement) {
  // >> START OF "NS -> On Select" [onselect] [NS] [START] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
  // << END OF "NS -> On Select" [onselect] [NS] [STOP] [JS] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A]
}

function usrEvent__FIC3__onfocus(HTMLElement) {
  // >> START OF "FIC3 -> On Focus" [onfocus] [FIC3] [START] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
  // << END OF "FIC3 -> On Focus" [onfocus] [FIC3] [STOP] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
}
function usrEvent__FIC3__onblur(HTMLElement) {
  // >> START OF "FIC3 -> On Blur (loss of focus)" [onblur] [FIC3] [START] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
  // << END OF "FIC3 -> On Blur (loss of focus)" [onblur] [FIC3] [STOP] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
}
function usrEvent__FIC3__onclick(HTMLElement) {
  // >> START OF "FIC3 -> On Click" [onclick] [FIC3] [START] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
  // << END OF "FIC3 -> On Click" [onclick] [FIC3] [STOP] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
}
function usrEvent__FIC3__ondblclick(HTMLElement) {
  // >> START OF "FIC3 -> On Double Click" [ondblclick] [FIC3] [START] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
  // << END OF "FIC3 -> On Double Click" [ondblclick] [FIC3] [STOP] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
}
function usrEvent__FIC3__onkeydown(HTMLElement) {
  // >> START OF "FIC3 -> On Key Down" [onkeydown] [FIC3] [START] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
  // << END OF "FIC3 -> On Key Down" [onkeydown] [FIC3] [STOP] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
}
function usrEvent__FIC3__onkeypress(HTMLElement) {
  // >> START OF "FIC3 -> On Key Press" [onkeypress] [FIC3] [START] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
  // << END OF "FIC3 -> On Key Press" [onkeypress] [FIC3] [STOP] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
}
function usrEvent__FIC3__onkeyup(HTMLElement) {
  // >> START OF "FIC3 -> On Key Up" [onkeyup] [FIC3] [START] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
  // << END OF "FIC3 -> On Key Up" [onkeyup] [FIC3] [STOP] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
}
function usrEvent__FIC3__onchange(HTMLElement) {
  // >> START OF "FIC3 -> On Change" [onchange] [FIC3] [START] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
  // << END OF "FIC3 -> On Change" [onchange] [FIC3] [STOP] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
}
function usrEvent__FIC3__onmousedown(HTMLElement) {
  // >> START OF "FIC3 -> On Mouse Down" [onmousedown] [FIC3] [START] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
  // << END OF "FIC3 -> On Mouse Down" [onmousedown] [FIC3] [STOP] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
}
function usrEvent__FIC3__onmousemove(HTMLElement) {
  // >> START OF "FIC3 -> On Mouse Move" [onmousemove] [FIC3] [START] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
  // << END OF "FIC3 -> On Mouse Move" [onmousemove] [FIC3] [STOP] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
}
function usrEvent__FIC3__onmouseout(HTMLElement) {
  // >> START OF "FIC3 -> On Mouse Out" [onmouseout] [FIC3] [START] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
  // << END OF "FIC3 -> On Mouse Out" [onmouseout] [FIC3] [STOP] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
}
function usrEvent__FIC3__onmouseover(HTMLElement) {
  // >> START OF "FIC3 -> On Mouse Over" [onmouseover] [FIC3] [START] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
  // << END OF "FIC3 -> On Mouse Over" [onmouseover] [FIC3] [STOP] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
}
function usrEvent__FIC3__onmouseup(HTMLElement) {
  // >> START OF "FIC3 -> On Mouse Up" [onmouseup] [FIC3] [START] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
  // << END OF "FIC3 -> On Mouse Up" [onmouseup] [FIC3] [STOP] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
}
function usrEvent__FIC3__onselect(HTMLElement) {
  // >> START OF "FIC3 -> On Select" [onselect] [FIC3] [START] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
  // << END OF "FIC3 -> On Select" [onselect] [FIC3] [STOP] [JS] [4F21904B-1C04-4762-956F-F30695DAA45E]
}

function usrEvent__GP__onfocus(HTMLElement) {
  // >> START OF "GP -> On Focus" [onfocus] [GP] [START] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
  // << END OF "GP -> On Focus" [onfocus] [GP] [STOP] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
}
function usrEvent__GP__onblur(HTMLElement) {
  // >> START OF "GP -> On Blur (loss of focus)" [onblur] [GP] [START] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
  // << END OF "GP -> On Blur (loss of focus)" [onblur] [GP] [STOP] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
}
function usrEvent__GP__onclick(HTMLElement) {
  // >> START OF "GP -> On Click" [onclick] [GP] [START] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
  // << END OF "GP -> On Click" [onclick] [GP] [STOP] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
}
function usrEvent__GP__ondblclick(HTMLElement) {
  // >> START OF "GP -> On Double Click" [ondblclick] [GP] [START] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
  // << END OF "GP -> On Double Click" [ondblclick] [GP] [STOP] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
}
function usrEvent__GP__onkeydown(HTMLElement) {
  // >> START OF "GP -> On Key Down" [onkeydown] [GP] [START] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
  // << END OF "GP -> On Key Down" [onkeydown] [GP] [STOP] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
}
function usrEvent__GP__onkeypress(HTMLElement) {
  // >> START OF "GP -> On Key Press" [onkeypress] [GP] [START] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
  // << END OF "GP -> On Key Press" [onkeypress] [GP] [STOP] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
}
function usrEvent__GP__onkeyup(HTMLElement) {
  // >> START OF "GP -> On Key Up" [onkeyup] [GP] [START] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
  // << END OF "GP -> On Key Up" [onkeyup] [GP] [STOP] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
}
function usrEvent__GP__onchange(HTMLElement) {
  // >> START OF "GP -> On Change" [onchange] [GP] [START] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
  // << END OF "GP -> On Change" [onchange] [GP] [STOP] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
}
function usrEvent__GP__onmousedown(HTMLElement) {
  // >> START OF "GP -> On Mouse Down" [onmousedown] [GP] [START] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
  // << END OF "GP -> On Mouse Down" [onmousedown] [GP] [STOP] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
}
function usrEvent__GP__onmousemove(HTMLElement) {
  // >> START OF "GP -> On Mouse Move" [onmousemove] [GP] [START] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
  // << END OF "GP -> On Mouse Move" [onmousemove] [GP] [STOP] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
}
function usrEvent__GP__onmouseout(HTMLElement) {
  // >> START OF "GP -> On Mouse Out" [onmouseout] [GP] [START] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
  // << END OF "GP -> On Mouse Out" [onmouseout] [GP] [STOP] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
}
function usrEvent__GP__onmouseover(HTMLElement) {
  // >> START OF "GP -> On Mouse Over" [onmouseover] [GP] [START] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
  // << END OF "GP -> On Mouse Over" [onmouseover] [GP] [STOP] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
}
function usrEvent__GP__onmouseup(HTMLElement) {
  // >> START OF "GP -> On Mouse Up" [onmouseup] [GP] [START] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
  // << END OF "GP -> On Mouse Up" [onmouseup] [GP] [STOP] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
}
function usrEvent__GP__onselect(HTMLElement) {
  // >> START OF "GP -> On Select" [onselect] [GP] [START] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
  // << END OF "GP -> On Select" [onselect] [GP] [STOP] [JS] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D]
}

function usrEvent__MENSAJE1__onfocus(HTMLElement) {
  // >> START OF "MENSAJE1 -> On Focus" [onfocus] [MENSAJE1] [START] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
  // << END OF "MENSAJE1 -> On Focus" [onfocus] [MENSAJE1] [STOP] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
}
function usrEvent__MENSAJE1__onblur(HTMLElement) {
  // >> START OF "MENSAJE1 -> On Blur (loss of focus)" [onblur] [MENSAJE1] [START] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
  // << END OF "MENSAJE1 -> On Blur (loss of focus)" [onblur] [MENSAJE1] [STOP] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
}
function usrEvent__MENSAJE1__onclick(HTMLElement) {
  // >> START OF "MENSAJE1 -> On Click" [onclick] [MENSAJE1] [START] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
  // << END OF "MENSAJE1 -> On Click" [onclick] [MENSAJE1] [STOP] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
}
function usrEvent__MENSAJE1__ondblclick(HTMLElement) {
  // >> START OF "MENSAJE1 -> On Double Click" [ondblclick] [MENSAJE1] [START] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
  // << END OF "MENSAJE1 -> On Double Click" [ondblclick] [MENSAJE1] [STOP] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
}
function usrEvent__MENSAJE1__onkeydown(HTMLElement) {
  // >> START OF "MENSAJE1 -> On Key Down" [onkeydown] [MENSAJE1] [START] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
  // << END OF "MENSAJE1 -> On Key Down" [onkeydown] [MENSAJE1] [STOP] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
}
function usrEvent__MENSAJE1__onkeypress(HTMLElement) {
  // >> START OF "MENSAJE1 -> On Key Press" [onkeypress] [MENSAJE1] [START] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
  // << END OF "MENSAJE1 -> On Key Press" [onkeypress] [MENSAJE1] [STOP] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
}
function usrEvent__MENSAJE1__onkeyup(HTMLElement) {
  // >> START OF "MENSAJE1 -> On Key Up" [onkeyup] [MENSAJE1] [START] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
  // << END OF "MENSAJE1 -> On Key Up" [onkeyup] [MENSAJE1] [STOP] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
}
function usrEvent__MENSAJE1__onchange(HTMLElement) {
  // >> START OF "MENSAJE1 -> On Change" [onchange] [MENSAJE1] [START] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
  // << END OF "MENSAJE1 -> On Change" [onchange] [MENSAJE1] [STOP] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
}
function usrEvent__MENSAJE1__onmousedown(HTMLElement) {
  // >> START OF "MENSAJE1 -> On Mouse Down" [onmousedown] [MENSAJE1] [START] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
  // << END OF "MENSAJE1 -> On Mouse Down" [onmousedown] [MENSAJE1] [STOP] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
}
function usrEvent__MENSAJE1__onmousemove(HTMLElement) {
  // >> START OF "MENSAJE1 -> On Mouse Move" [onmousemove] [MENSAJE1] [START] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
  // << END OF "MENSAJE1 -> On Mouse Move" [onmousemove] [MENSAJE1] [STOP] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
}
function usrEvent__MENSAJE1__onmouseout(HTMLElement) {
  // >> START OF "MENSAJE1 -> On Mouse Out" [onmouseout] [MENSAJE1] [START] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
  // << END OF "MENSAJE1 -> On Mouse Out" [onmouseout] [MENSAJE1] [STOP] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
}
function usrEvent__MENSAJE1__onmouseover(HTMLElement) {
  // >> START OF "MENSAJE1 -> On Mouse Over" [onmouseover] [MENSAJE1] [START] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
  // << END OF "MENSAJE1 -> On Mouse Over" [onmouseover] [MENSAJE1] [STOP] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
}
function usrEvent__MENSAJE1__onmouseup(HTMLElement) {
  // >> START OF "MENSAJE1 -> On Mouse Up" [onmouseup] [MENSAJE1] [START] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
  // << END OF "MENSAJE1 -> On Mouse Up" [onmouseup] [MENSAJE1] [STOP] [JS] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9]
}

function usrEvent__PUNTAJE__onfocus(HTMLElement) {
  // >> START OF "PUNTAJE -> On Focus" [onfocus] [PUNTAJE] [START] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
  // << END OF "PUNTAJE -> On Focus" [onfocus] [PUNTAJE] [STOP] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
}
function usrEvent__PUNTAJE__onblur(HTMLElement) {
  // >> START OF "PUNTAJE -> On Blur (loss of focus)" [onblur] [PUNTAJE] [START] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
  // << END OF "PUNTAJE -> On Blur (loss of focus)" [onblur] [PUNTAJE] [STOP] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
}
function usrEvent__PUNTAJE__onclick(HTMLElement) {
  // >> START OF "PUNTAJE -> On Click" [onclick] [PUNTAJE] [START] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
  // << END OF "PUNTAJE -> On Click" [onclick] [PUNTAJE] [STOP] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
}
function usrEvent__PUNTAJE__ondblclick(HTMLElement) {
  // >> START OF "PUNTAJE -> On Double Click" [ondblclick] [PUNTAJE] [START] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
  // << END OF "PUNTAJE -> On Double Click" [ondblclick] [PUNTAJE] [STOP] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
}
function usrEvent__PUNTAJE__onkeydown(HTMLElement) {
  // >> START OF "PUNTAJE -> On Key Down" [onkeydown] [PUNTAJE] [START] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
  // << END OF "PUNTAJE -> On Key Down" [onkeydown] [PUNTAJE] [STOP] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
}
function usrEvent__PUNTAJE__onkeypress(HTMLElement) {
  // >> START OF "PUNTAJE -> On Key Press" [onkeypress] [PUNTAJE] [START] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
  // << END OF "PUNTAJE -> On Key Press" [onkeypress] [PUNTAJE] [STOP] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
}
function usrEvent__PUNTAJE__onkeyup(HTMLElement) {
  // >> START OF "PUNTAJE -> On Key Up" [onkeyup] [PUNTAJE] [START] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
  // << END OF "PUNTAJE -> On Key Up" [onkeyup] [PUNTAJE] [STOP] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
}
function usrEvent__PUNTAJE__onchange(HTMLElement) {
  // >> START OF "PUNTAJE -> On Change" [onchange] [PUNTAJE] [START] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
  // << END OF "PUNTAJE -> On Change" [onchange] [PUNTAJE] [STOP] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
}
function usrEvent__PUNTAJE__onmousedown(HTMLElement) {
  // >> START OF "PUNTAJE -> On Mouse Down" [onmousedown] [PUNTAJE] [START] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
  // << END OF "PUNTAJE -> On Mouse Down" [onmousedown] [PUNTAJE] [STOP] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
}
function usrEvent__PUNTAJE__onmousemove(HTMLElement) {
  // >> START OF "PUNTAJE -> On Mouse Move" [onmousemove] [PUNTAJE] [START] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
  // << END OF "PUNTAJE -> On Mouse Move" [onmousemove] [PUNTAJE] [STOP] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
}
function usrEvent__PUNTAJE__onmouseout(HTMLElement) {
  // >> START OF "PUNTAJE -> On Mouse Out" [onmouseout] [PUNTAJE] [START] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
  // << END OF "PUNTAJE -> On Mouse Out" [onmouseout] [PUNTAJE] [STOP] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
}
function usrEvent__PUNTAJE__onmouseover(HTMLElement) {
  // >> START OF "PUNTAJE -> On Mouse Over" [onmouseover] [PUNTAJE] [START] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
  // << END OF "PUNTAJE -> On Mouse Over" [onmouseover] [PUNTAJE] [STOP] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
}
function usrEvent__PUNTAJE__onmouseup(HTMLElement) {
  // >> START OF "PUNTAJE -> On Mouse Up" [onmouseup] [PUNTAJE] [START] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
  // << END OF "PUNTAJE -> On Mouse Up" [onmouseup] [PUNTAJE] [STOP] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
}
function usrEvent__PUNTAJE__onselect(HTMLElement) {
  // >> START OF "PUNTAJE -> On Select" [onselect] [PUNTAJE] [START] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
  // << END OF "PUNTAJE -> On Select" [onselect] [PUNTAJE] [STOP] [JS] [5E894E2D-0F77-463A-886F-FC21DD458AAE]
}

function usrEvent__Parentesco__onfocus(HTMLElement) {
  // >> START OF "Parentesco -> On Focus" [onfocus] [Parentesco] [START] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
  // << END OF "Parentesco -> On Focus" [onfocus] [Parentesco] [STOP] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
}
function usrEvent__Parentesco__onblur(HTMLElement) {
  // >> START OF "Parentesco -> On Blur (loss of focus)" [onblur] [Parentesco] [START] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
  // << END OF "Parentesco -> On Blur (loss of focus)" [onblur] [Parentesco] [STOP] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
}
function usrEvent__Parentesco__onclick(HTMLElement) {
  // >> START OF "Parentesco -> On Click" [onclick] [Parentesco] [START] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
  // << END OF "Parentesco -> On Click" [onclick] [Parentesco] [STOP] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
}
function usrEvent__Parentesco__ondblclick(HTMLElement) {
  // >> START OF "Parentesco -> On Double Click" [ondblclick] [Parentesco] [START] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
  // << END OF "Parentesco -> On Double Click" [ondblclick] [Parentesco] [STOP] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
}
function usrEvent__Parentesco__onkeydown(HTMLElement) {
  // >> START OF "Parentesco -> On Key Down" [onkeydown] [Parentesco] [START] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
  // << END OF "Parentesco -> On Key Down" [onkeydown] [Parentesco] [STOP] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
}
function usrEvent__Parentesco__onkeypress(HTMLElement) {
  // >> START OF "Parentesco -> On Key Press" [onkeypress] [Parentesco] [START] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
  // << END OF "Parentesco -> On Key Press" [onkeypress] [Parentesco] [STOP] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
}
function usrEvent__Parentesco__onkeyup(HTMLElement) {
  // >> START OF "Parentesco -> On Key Up" [onkeyup] [Parentesco] [START] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
  // << END OF "Parentesco -> On Key Up" [onkeyup] [Parentesco] [STOP] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
}
function usrEvent__Parentesco__onchange(HTMLElement) {
  // >> START OF "Parentesco -> On Change" [onchange] [Parentesco] [START] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
  // << END OF "Parentesco -> On Change" [onchange] [Parentesco] [STOP] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
}
function usrEvent__Parentesco__onmousedown(HTMLElement) {
  // >> START OF "Parentesco -> On Mouse Down" [onmousedown] [Parentesco] [START] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
  // << END OF "Parentesco -> On Mouse Down" [onmousedown] [Parentesco] [STOP] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
}
function usrEvent__Parentesco__onmousemove(HTMLElement) {
  // >> START OF "Parentesco -> On Mouse Move" [onmousemove] [Parentesco] [START] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
  // << END OF "Parentesco -> On Mouse Move" [onmousemove] [Parentesco] [STOP] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
}
function usrEvent__Parentesco__onmouseout(HTMLElement) {
  // >> START OF "Parentesco -> On Mouse Out" [onmouseout] [Parentesco] [START] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
  // << END OF "Parentesco -> On Mouse Out" [onmouseout] [Parentesco] [STOP] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
}
function usrEvent__Parentesco__onmouseover(HTMLElement) {
  // >> START OF "Parentesco -> On Mouse Over" [onmouseover] [Parentesco] [START] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
  // << END OF "Parentesco -> On Mouse Over" [onmouseover] [Parentesco] [STOP] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
}
function usrEvent__Parentesco__onmouseup(HTMLElement) {
  // >> START OF "Parentesco -> On Mouse Up" [onmouseup] [Parentesco] [START] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
  // << END OF "Parentesco -> On Mouse Up" [onmouseup] [Parentesco] [STOP] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
}
function usrEvent__Parentesco__onselect(HTMLElement) {
  // >> START OF "Parentesco -> On Select" [onselect] [Parentesco] [START] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
  // << END OF "Parentesco -> On Select" [onselect] [Parentesco] [STOP] [JS] [473236D2-288E-4E94-B7E6-A776C07D626E]
}

function usrEvent__Ampliacion_1__onfocus(HTMLElement) {
  // >> START OF "Ampliacion 1 -> On Focus" [onfocus] [Ampliacion_1] [START] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
  // << END OF "Ampliacion 1 -> On Focus" [onfocus] [Ampliacion_1] [STOP] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
}
function usrEvent__Ampliacion_1__onblur(HTMLElement) {
  // >> START OF "Ampliacion 1 -> On Blur (loss of focus)" [onblur] [Ampliacion_1] [START] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
  // << END OF "Ampliacion 1 -> On Blur (loss of focus)" [onblur] [Ampliacion_1] [STOP] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
}
function usrEvent__Ampliacion_1__onclick(HTMLElement) {
  // >> START OF "Ampliacion 1 -> On Click" [onclick] [Ampliacion_1] [START] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
  // << END OF "Ampliacion 1 -> On Click" [onclick] [Ampliacion_1] [STOP] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
}
function usrEvent__Ampliacion_1__ondblclick(HTMLElement) {
  // >> START OF "Ampliacion 1 -> On Double Click" [ondblclick] [Ampliacion_1] [START] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
  // << END OF "Ampliacion 1 -> On Double Click" [ondblclick] [Ampliacion_1] [STOP] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
}
function usrEvent__Ampliacion_1__onkeydown(HTMLElement) {
  // >> START OF "Ampliacion 1 -> On Key Down" [onkeydown] [Ampliacion_1] [START] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
  // << END OF "Ampliacion 1 -> On Key Down" [onkeydown] [Ampliacion_1] [STOP] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
}
function usrEvent__Ampliacion_1__onkeypress(HTMLElement) {
  // >> START OF "Ampliacion 1 -> On Key Press" [onkeypress] [Ampliacion_1] [START] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
  // << END OF "Ampliacion 1 -> On Key Press" [onkeypress] [Ampliacion_1] [STOP] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
}
function usrEvent__Ampliacion_1__onkeyup(HTMLElement) {
  // >> START OF "Ampliacion 1 -> On Key Up" [onkeyup] [Ampliacion_1] [START] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
  // << END OF "Ampliacion 1 -> On Key Up" [onkeyup] [Ampliacion_1] [STOP] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
}
function usrEvent__Ampliacion_1__onchange(HTMLElement) {
  // >> START OF "Ampliacion 1 -> On Change" [onchange] [Ampliacion_1] [START] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
  // << END OF "Ampliacion 1 -> On Change" [onchange] [Ampliacion_1] [STOP] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
}
function usrEvent__Ampliacion_1__onmousedown(HTMLElement) {
  // >> START OF "Ampliacion 1 -> On Mouse Down" [onmousedown] [Ampliacion_1] [START] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
  // << END OF "Ampliacion 1 -> On Mouse Down" [onmousedown] [Ampliacion_1] [STOP] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
}
function usrEvent__Ampliacion_1__onmousemove(HTMLElement) {
  // >> START OF "Ampliacion 1 -> On Mouse Move" [onmousemove] [Ampliacion_1] [START] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
  // << END OF "Ampliacion 1 -> On Mouse Move" [onmousemove] [Ampliacion_1] [STOP] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
}
function usrEvent__Ampliacion_1__onmouseout(HTMLElement) {
  // >> START OF "Ampliacion 1 -> On Mouse Out" [onmouseout] [Ampliacion_1] [START] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
  // << END OF "Ampliacion 1 -> On Mouse Out" [onmouseout] [Ampliacion_1] [STOP] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
}
function usrEvent__Ampliacion_1__onmouseover(HTMLElement) {
  // >> START OF "Ampliacion 1 -> On Mouse Over" [onmouseover] [Ampliacion_1] [START] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
  // << END OF "Ampliacion 1 -> On Mouse Over" [onmouseover] [Ampliacion_1] [STOP] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
}
function usrEvent__Ampliacion_1__onmouseup(HTMLElement) {
  // >> START OF "Ampliacion 1 -> On Mouse Up" [onmouseup] [Ampliacion_1] [START] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
  // << END OF "Ampliacion 1 -> On Mouse Up" [onmouseup] [Ampliacion_1] [STOP] [JS] [B530E376-1CD9-4F8B-AA4D-32775349AE12]
}

function usrEvent__Prestadora__onfocus(HTMLElement) {
  // >> START OF "Prestadora -> On Focus" [onfocus] [Prestadora] [START] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
  // << END OF "Prestadora -> On Focus" [onfocus] [Prestadora] [STOP] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
}
function usrEvent__Prestadora__onblur(HTMLElement) {
  // >> START OF "Prestadora -> On Blur (loss of focus)" [onblur] [Prestadora] [START] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
  // << END OF "Prestadora -> On Blur (loss of focus)" [onblur] [Prestadora] [STOP] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
}
function usrEvent__Prestadora__onclick(HTMLElement) {
  // >> START OF "Prestadora -> On Click" [onclick] [Prestadora] [START] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
  // << END OF "Prestadora -> On Click" [onclick] [Prestadora] [STOP] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
}
function usrEvent__Prestadora__ondblclick(HTMLElement) {
  // >> START OF "Prestadora -> On Double Click" [ondblclick] [Prestadora] [START] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
  // << END OF "Prestadora -> On Double Click" [ondblclick] [Prestadora] [STOP] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
}
function usrEvent__Prestadora__onkeydown(HTMLElement) {
  // >> START OF "Prestadora -> On Key Down" [onkeydown] [Prestadora] [START] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
  // << END OF "Prestadora -> On Key Down" [onkeydown] [Prestadora] [STOP] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
}
function usrEvent__Prestadora__onkeypress(HTMLElement) {
  // >> START OF "Prestadora -> On Key Press" [onkeypress] [Prestadora] [START] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
  // << END OF "Prestadora -> On Key Press" [onkeypress] [Prestadora] [STOP] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
}
function usrEvent__Prestadora__onkeyup(HTMLElement) {
  // >> START OF "Prestadora -> On Key Up" [onkeyup] [Prestadora] [START] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
  // << END OF "Prestadora -> On Key Up" [onkeyup] [Prestadora] [STOP] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
}
function usrEvent__Prestadora__onchange(HTMLElement) {
  // >> START OF "Prestadora -> On Change" [onchange] [Prestadora] [START] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
  // << END OF "Prestadora -> On Change" [onchange] [Prestadora] [STOP] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
}
function usrEvent__Prestadora__onmousedown(HTMLElement) {
  // >> START OF "Prestadora -> On Mouse Down" [onmousedown] [Prestadora] [START] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
  // << END OF "Prestadora -> On Mouse Down" [onmousedown] [Prestadora] [STOP] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
}
function usrEvent__Prestadora__onmousemove(HTMLElement) {
  // >> START OF "Prestadora -> On Mouse Move" [onmousemove] [Prestadora] [START] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
  // << END OF "Prestadora -> On Mouse Move" [onmousemove] [Prestadora] [STOP] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
}
function usrEvent__Prestadora__onmouseout(HTMLElement) {
  // >> START OF "Prestadora -> On Mouse Out" [onmouseout] [Prestadora] [START] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
  // << END OF "Prestadora -> On Mouse Out" [onmouseout] [Prestadora] [STOP] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
}
function usrEvent__Prestadora__onmouseover(HTMLElement) {
  // >> START OF "Prestadora -> On Mouse Over" [onmouseover] [Prestadora] [START] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
  // << END OF "Prestadora -> On Mouse Over" [onmouseover] [Prestadora] [STOP] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
}
function usrEvent__Prestadora__onmouseup(HTMLElement) {
  // >> START OF "Prestadora -> On Mouse Up" [onmouseup] [Prestadora] [START] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
  // << END OF "Prestadora -> On Mouse Up" [onmouseup] [Prestadora] [STOP] [JS] [E3206345-1080-4EF9-90DD-36971EF3BD9C]
}

function usrEvent__Observa_urgencias__onfocus(HTMLElement) {
  // >> START OF "Observa urgencias -> On Focus" [onfocus] [Observa_urgencias] [START] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
  // << END OF "Observa urgencias -> On Focus" [onfocus] [Observa_urgencias] [STOP] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
}
function usrEvent__Observa_urgencias__onblur(HTMLElement) {
  // >> START OF "Observa urgencias -> On Blur (loss of focus)" [onblur] [Observa_urgencias] [START] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
  // << END OF "Observa urgencias -> On Blur (loss of focus)" [onblur] [Observa_urgencias] [STOP] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
}
function usrEvent__Observa_urgencias__onclick(HTMLElement) {
  // >> START OF "Observa urgencias -> On Click" [onclick] [Observa_urgencias] [START] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
  // << END OF "Observa urgencias -> On Click" [onclick] [Observa_urgencias] [STOP] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
}
function usrEvent__Observa_urgencias__ondblclick(HTMLElement) {
  // >> START OF "Observa urgencias -> On Double Click" [ondblclick] [Observa_urgencias] [START] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
  // << END OF "Observa urgencias -> On Double Click" [ondblclick] [Observa_urgencias] [STOP] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
}
function usrEvent__Observa_urgencias__onkeydown(HTMLElement) {
  // >> START OF "Observa urgencias -> On Key Down" [onkeydown] [Observa_urgencias] [START] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
  // << END OF "Observa urgencias -> On Key Down" [onkeydown] [Observa_urgencias] [STOP] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
}
function usrEvent__Observa_urgencias__onkeypress(HTMLElement) {
  // >> START OF "Observa urgencias -> On Key Press" [onkeypress] [Observa_urgencias] [START] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
  // << END OF "Observa urgencias -> On Key Press" [onkeypress] [Observa_urgencias] [STOP] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
}
function usrEvent__Observa_urgencias__onkeyup(HTMLElement) {
  // >> START OF "Observa urgencias -> On Key Up" [onkeyup] [Observa_urgencias] [START] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
  // << END OF "Observa urgencias -> On Key Up" [onkeyup] [Observa_urgencias] [STOP] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
}
function usrEvent__Observa_urgencias__onchange(HTMLElement) {
  // >> START OF "Observa urgencias -> On Change" [onchange] [Observa_urgencias] [START] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
  // << END OF "Observa urgencias -> On Change" [onchange] [Observa_urgencias] [STOP] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
}
function usrEvent__Observa_urgencias__onmousedown(HTMLElement) {
  // >> START OF "Observa urgencias -> On Mouse Down" [onmousedown] [Observa_urgencias] [START] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
  // << END OF "Observa urgencias -> On Mouse Down" [onmousedown] [Observa_urgencias] [STOP] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
}
function usrEvent__Observa_urgencias__onmousemove(HTMLElement) {
  // >> START OF "Observa urgencias -> On Mouse Move" [onmousemove] [Observa_urgencias] [START] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
  // << END OF "Observa urgencias -> On Mouse Move" [onmousemove] [Observa_urgencias] [STOP] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
}
function usrEvent__Observa_urgencias__onmouseout(HTMLElement) {
  // >> START OF "Observa urgencias -> On Mouse Out" [onmouseout] [Observa_urgencias] [START] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
  // << END OF "Observa urgencias -> On Mouse Out" [onmouseout] [Observa_urgencias] [STOP] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
}
function usrEvent__Observa_urgencias__onmouseover(HTMLElement) {
  // >> START OF "Observa urgencias -> On Mouse Over" [onmouseover] [Observa_urgencias] [START] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
  // << END OF "Observa urgencias -> On Mouse Over" [onmouseover] [Observa_urgencias] [STOP] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
}
function usrEvent__Observa_urgencias__onmouseup(HTMLElement) {
  // >> START OF "Observa urgencias -> On Mouse Up" [onmouseup] [Observa_urgencias] [START] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
  // << END OF "Observa urgencias -> On Mouse Up" [onmouseup] [Observa_urgencias] [STOP] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
}
function usrEvent__Observa_urgencias__onselect(HTMLElement) {
  // >> START OF "Observa urgencias -> On Select" [onselect] [Observa_urgencias] [START] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
  // << END OF "Observa urgencias -> On Select" [onselect] [Observa_urgencias] [STOP] [JS] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA]
}

function usrEvent__registra__onfocus(HTMLElement) {
  // >> START OF "registra -> On Focus" [onfocus] [registra] [START] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
  // << END OF "registra -> On Focus" [onfocus] [registra] [STOP] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
}
function usrEvent__registra__onblur(HTMLElement) {
  // >> START OF "registra -> On Blur (loss of focus)" [onblur] [registra] [START] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
  // << END OF "registra -> On Blur (loss of focus)" [onblur] [registra] [STOP] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
}
function usrEvent__registra__onclick(HTMLElement) {
  // >> START OF "registra -> On Click" [onclick] [registra] [START] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
  // << END OF "registra -> On Click" [onclick] [registra] [STOP] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
}
function usrEvent__registra__ondblclick(HTMLElement) {
  // >> START OF "registra -> On Double Click" [ondblclick] [registra] [START] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
  // << END OF "registra -> On Double Click" [ondblclick] [registra] [STOP] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
}
function usrEvent__registra__onkeydown(HTMLElement) {
  // >> START OF "registra -> On Key Down" [onkeydown] [registra] [START] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
  // << END OF "registra -> On Key Down" [onkeydown] [registra] [STOP] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
}
function usrEvent__registra__onkeypress(HTMLElement) {
  // >> START OF "registra -> On Key Press" [onkeypress] [registra] [START] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
  // << END OF "registra -> On Key Press" [onkeypress] [registra] [STOP] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
}
function usrEvent__registra__onkeyup(HTMLElement) {
  // >> START OF "registra -> On Key Up" [onkeyup] [registra] [START] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
  // << END OF "registra -> On Key Up" [onkeyup] [registra] [STOP] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
}
function usrEvent__registra__onchange(HTMLElement) {
  // >> START OF "registra -> On Change" [onchange] [registra] [START] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
  // << END OF "registra -> On Change" [onchange] [registra] [STOP] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
}
function usrEvent__registra__onmousedown(HTMLElement) {
  // >> START OF "registra -> On Mouse Down" [onmousedown] [registra] [START] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
  // << END OF "registra -> On Mouse Down" [onmousedown] [registra] [STOP] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
}
function usrEvent__registra__onmousemove(HTMLElement) {
  // >> START OF "registra -> On Mouse Move" [onmousemove] [registra] [START] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
  // << END OF "registra -> On Mouse Move" [onmousemove] [registra] [STOP] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
}
function usrEvent__registra__onmouseout(HTMLElement) {
  // >> START OF "registra -> On Mouse Out" [onmouseout] [registra] [START] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
  // << END OF "registra -> On Mouse Out" [onmouseout] [registra] [STOP] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
}
function usrEvent__registra__onmouseover(HTMLElement) {
  // >> START OF "registra -> On Mouse Over" [onmouseover] [registra] [START] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
  // << END OF "registra -> On Mouse Over" [onmouseover] [registra] [STOP] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
}
function usrEvent__registra__onmouseup(HTMLElement) {
  // >> START OF "registra -> On Mouse Up" [onmouseup] [registra] [START] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
  // << END OF "registra -> On Mouse Up" [onmouseup] [registra] [STOP] [JS] [7D4ED634-72FE-4D07-89C7-CFC39D51A502]
}


function usrEvent__Add_LNP__onsubmit(frm) {
  // >> START OF "Add PPNAPASTO -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599]
  // << END OF "Add PPNAPASTO -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599]
}



function usrEvent__Add_LNP__onreset() {
  // >> START OF "Add PPNAPASTO -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599]
  // << END OF "Add PPNAPASTO -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599]
}



// This function controls the OnSubmit event dispatching
function qsFormOnSubmitController(frm) {                 
   var lastResult = false                              
   // Call the standard dbQwikSite form validation rules
   lastResult = check(frm);                            
   if (lastResult == false) {                          
      return false;                                    
   }                                                   
   return true;                                        
}                                                      



// This function controls the OnReset event dispatching
function qsPageOnResetController() {   
   var lastResult = false                              
   return true;                                        
}                                                      


</script>

<script language='javascript' src='qwikcalendar.js'></script>
<?php
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>

</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
<BODY>
<p align="right"><?php echo '<img src="http://204.199.120.6:8088/sms/pdf/LogoAlcaldia.png">'; ?></p>
<div align="center">
  <?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
  <?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>


  <font size="5">Anexar Usuarios Elegibles - Casos de Urgencias</font>.
</div>
<Center>
  <center><hr />
    <?php
// >> START OF "after page header" [HEADER001] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page header" [HEADER001] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
    <A NAME=top></A>
  </center>
  <table id="QS_Content_Layout_1_Table">
    <tr id="QS_Content_Layout_1_TopRow">
      <td id="QS_Content_Layout_1_NorthWest">
        <div id="QS_Content_Layout_1_NorthWestDiv">
  <?php
// >> START OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
        </div>
      </td>
      <td id="QS_Content_Layout_1_North">
        <div id="QS_Content_Layout_1_NorthDiv">
  <?php
// >> START OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
        </div>
      </td>
      <td id="QS_Content_Layout_1_NorthEast">
        <div id="QS_Content_Layout_1_NorthEastDiv">
  <?php
// >> START OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
        </div>
      </td>
    </tr>
    <tr id="QS_Content_Layout_1_MiddleRow">
      <td id="QS_Content_Layout_1_West">
        <div id="QS_Content_Layout_1_WestDiv">
  <?php
// >> START OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
        </div>
      </td>
      <td id="QS_Content_Layout_1_Center">
        <div id="QS_Content_Layout_1_CenterDiv">
  <?php
// >> START OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
          
          
  <script>
function getURLParam(strParamName){
var strReturn = "";
var strHref = window.location.href;
if ( strHref.indexOf("?") > -1 ){
  var strQueryString = strHref.substr(strHref.indexOf("?")).toLowerCase();
  var aQueryString = strQueryString.split("&");
  for ( var iParam = 0; iParam < aQueryString.length; iParam++ ){
    if (
	aQueryString[iParam].indexOf(strParamName + "=") > -1 ){
      var aParam = aQueryString[iParam].split("=");
      strReturn = aParam[1];
      break;
    }
  }
}
return strReturn;
}
</script>
          
          
  <Form name="qs_add_form" method="post" action="./lnp_add.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >
  <?php
// >> START OF "before add data form" [ADDFRM001] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add data form" [ADDFRM001] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
  <?php
print $hidden_tag;
?>
  <Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#FFFFFF">
    
  <?php
$css_class = "\"TrOdd\"";
?>
  <tr>
  <td colspan="2" class="ThRows">Ingresar Informaci&oacute;n</td>
  </tr>
  <?php
if ($err_string != "") {
    print "<tr>";
    print "<td class=\"ThRows\"><Strong>Error:</Strong></td>";
    print "<td class=" . $css_class . " align=Default>" . $err_string . "</td>";
    print "</tr>";
}
?>
  <tr>
  <td class="ThRows">ID</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd0"])) && (!isset($_POST["add_fd0"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd0");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd0\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"50\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "ID -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D] [ID]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "ID -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [1BFC6AE6-00F4-463C-B34B-22BCDCB1F83D] [ID]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">TD</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd1"])) && (!isset($_POST["add_fd1"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd1");
}

    $cellvalue = "<select name=\"add_fd1\" ><option value=\"\"" . qscheckselected("",$itemvalue,"selected") . ">Seleccionar</option>" . qsodbcgen_listbox($conn,"  Select Distinct `documento`,`documento` From `documento` Order by `documento` Asc ","documento","documento",$itemvalue) . "</select>";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "TD -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [43BCAE34-5CB9-4DF0-B282-5E077EA43816] [TD]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "TD -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [43BCAE34-5CB9-4DF0-B282-5E077EA43816] [TD]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">ND</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd2"])) && (!isset($_POST["add_fd2"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd2");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd2\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"20\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "ND -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [D43490FA-EC01-4380-BBE8-7A1660C867A8] [ND]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "ND -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [D43490FA-EC01-4380-BBE8-7A1660C867A8] [ND]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">PA</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd3"])) && (!isset($_POST["add_fd3"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd3");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd3\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"30\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "PA -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F] [PA]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "PA -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [F045F6B5-A1F2-45B1-AB01-7057F9AACA4F] [PA]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">SA</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd4"])) && (!isset($_POST["add_fd4"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd4");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd4\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"30\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "SA -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC] [SA]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "SA -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [CAEDF3ED-F2DF-452B-B901-D8979DA87EBC] [SA]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">PN</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd5"])) && (!isset($_POST["add_fd5"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd5");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd5\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"20\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "PN -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679] [PN]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "PN -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [586FAEF5-E3A8-47DF-B6AC-DD663B2B8679] [PN]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">SN</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd6"])) && (!isset($_POST["add_fd6"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd6");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd6\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"20\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "SN -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2] [SN]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "SN -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [133DE9FF-6599-47CD-9CBF-FE0820EAC0E2] [SN]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">FECNAC</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd7"])) && (!isset($_POST["add_fd7"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd7");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd7\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"50\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "FECNAC -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF] [FECNAC]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "FECNAC -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [25C135A1-C1CE-4133-A30F-D5DCFE47C5AF] [FECNAC]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">SX</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd8"])) && (!isset($_POST["add_fd8"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd8");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd8\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"2\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "SX -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [2EF7EE55-0B37-4866-871E-58F40529698E] [SX]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "SX -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [2EF7EE55-0B37-4866-871E-58F40529698E] [SX]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">NS</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd9"])) && (!isset($_POST["add_fd9"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd9");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd9\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"50\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "NS -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A] [NS]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "NS -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [032AA6AE-443B-4FCB-AF49-15622C6F2E0A] [NS]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">FIC3</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd10"])) && (!isset($_POST["add_fd10"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd10");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd10\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"50\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "FIC3 -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [4F21904B-1C04-4762-956F-F30695DAA45E] [FIC3]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "FIC3 -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [4F21904B-1C04-4762-956F-F30695DAA45E] [FIC3]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">GP</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd11"])) && (!isset($_POST["add_fd11"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd11");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd11\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"2\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "GP -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D] [GP]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "GP -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [2D4424DE-7CAF-4C63-8C3B-67024A79D90D] [GP]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">MENSAJE1</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd12"])) && (!isset($_POST["add_fd12"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd12");
}

    $cellvalue = "<select name=\"add_fd12\" >" . qsodbcgen_listbox($conn,"  Select Distinct `Usuario2`,`Usuario2` From `Usuario2` Order by `Usuario2` Asc ","Usuario2","Usuario2",$itemvalue) . "</select>";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "MENSAJE1 -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9] [MENSAJE1]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "MENSAJE1 -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [65D0DC8E-799C-46B3-8BBA-A9F28FAA40D9] [MENSAJE1]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">PUNTAJE</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd13"])) && (!isset($_POST["add_fd13"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd13");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd13\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"50\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "PUNTAJE -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [5E894E2D-0F77-463A-886F-FC21DD458AAE] [PUNTAJE]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "PUNTAJE -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [5E894E2D-0F77-463A-886F-FC21DD458AAE] [PUNTAJE]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">Parentesco</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd15"])) && (!isset($_POST["add_fd15"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd15");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd15\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"50\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Parentesco -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [473236D2-288E-4E94-B7E6-A776C07D626E] [Parentesco]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Parentesco -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [473236D2-288E-4E94-B7E6-A776C07D626E] [Parentesco]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows"><p>Ampliacion</p>
    <p>(favor de no cambiar</p>
    <p> este valor al registrar)</p></td>
  <?php
$cellvalue = "";
$cbchecked = "";
if ((!isset($_GET["add_fd16"])) && (!isset($_POST["add_fd16"]))) {
    $itemvalue = "0";
} else {
    $itemvalue = qsrequest("add_fd16");
}

    $cellvalue = "<input type=\"checkbox\" name=\"add_fd16\" value=\"1\" " . $cbchecked . ">Yes";;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Ampliacion_1 -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [B530E376-1CD9-4F8B-AA4D-32775349AE12] [Ampliacion_1]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Ampliacion_1 -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [B530E376-1CD9-4F8B-AA4D-32775349AE12] [Ampliacion_1]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">Prestadora</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd17"])) && (!isset($_POST["add_fd17"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd17");
}

    $cellvalue = "<select name=\"add_fd17\" >" . qsodbcgen_listbox($conn,"  Select Distinct `Usuario2`,`Usuario2` From `Usuario2` Order by `Usuario2` Asc ","Usuario2","Usuario2",$itemvalue) . "</select>";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Prestadora -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [E3206345-1080-4EF9-90DD-36971EF3BD9C] [Prestadora]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Prestadora -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [E3206345-1080-4EF9-90DD-36971EF3BD9C] [Prestadora]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">Observa urgencias</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd19"])) && (!isset($_POST["add_fd19"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd19");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd19\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"250\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Observa_urgencias -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA] [Observa_urgencias]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Observa_urgencias -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [F5EF89AF-578F-4CC5-BD52-B03CD2EE48FA] [Observa_urgencias]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <tr>
  <td class="ThRows">Quien registra</td>
  <?php
$cellvalue = "";
if ((!isset($_GET["add_fd21"])) && (!isset($_POST["add_fd21"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd21");
}

    $cellvalue = "<select name=\"add_fd21\" >" . qsodbcgen_listbox($conn,"  Select Distinct `usuario1`,`usuario1` From `Usuario1` Order by `usuario1` Asc ","usuario1","usuario1",$itemvalue) . "</select>";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "registra -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [7D4ED634-72FE-4D07-89C7-CFC39D51A502] [registra]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "registra -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [7D4ED634-72FE-4D07-89C7-CFC39D51A502] [registra]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
  </tr>
  <?php
#----get back url page----
  $backurl = "./lnp.php?";
?>
  <tr>
  <td class="ThRows">&nbsp;</td>
  <td class="TrOdd" align=Default>
  <input type="hidden" name="act" value="n">&nbsp;&nbsp;
  <input type="submit" name="QS_Submit" value="Anexar en Base">&nbsp;&nbsp;
  <input type="reset" name="QS_Reset" value="Limpiar ">
  </td>
  </tr>
  </Table><br>
  </Form>
  <?php
// >> START OF "after add data form" [ADDFRM001] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after add data form" [ADDFRM001] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
  <?php
if ($result > 0) {odbc_free_result($result);}
if ($conn > 0) {odbc_close($conn);}
?>
  <?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
        </div>
      </td>
      <td id="QS_Content_Layout_1_East">
        <div id="QS_Content_Layout_1_EastDiv">
  <?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
        </div>
      </td>
    </tr>
    <tr id="QS_Content_Layout_1_BottomRow">
      <td id="QS_Content_Layout_1_SouthWest">
        <div id="QS_Content_Layout_1_SouthWestDiv">
  <?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
        </div>
      </td>
      <td id="QS_Content_Layout_1_South">
        <div id="QS_Content_Layout_1_SouthDiv">
  <?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
        </div>
      </td>
      <td id="QS_Content_Layout_1_SouthEast">
        <div id="QS_Content_Layout_1_SouthEastDiv">
  <?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
        </div>
      </td>
    </tr>
  </table>
  
  <A NAME=bottom></A>
  <?php
// >> START OF "before page footer" [FOOTER001] [PRE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page footer" [FOOTER001] [PRE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
</Center>

<?php
// >> START OF "after page footer" [FOOTER001] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page footer" [FOOTER001] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
<?php
// >> START OF "after page body" [BODY001] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page body" [BODY001] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
</BODY>
<?php
// >> START OF "after page html" [HTML001] [POST] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page html" [HTML001] [POST] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
</HTML>
<?php
// >> START OF "on end of page" [EOF001] [INLINE] [START] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on end of page" [EOF001] [INLINE] [STOP] [SRV] [D76ABAE5-BFF6-46DD-B86F-55F329CA5599] [Add PPNAPASTO]
?>
