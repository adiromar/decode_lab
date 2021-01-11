
<img src="{{ realpath('pdf_assets/decode.png') }}" width="100%">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>COVID-19 Patient Report</title>
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

<style>

    * {
     /* font-family: "DejaVu Sans"; */
     font-family: "Times New Roman";
     font-size: 12px;
    }
    /* {
        width: auto;
        font: 17px Calibri;
    } */
    table{
        /*border: 1px solid lightgrey;*/
    }
    .d-tbl > th, .d-tbl > td 
    {
        border: solid 1px #DDD;
        border-collapse: collapse;
        padding: 2px 3px;
        text-align: center;
    }
    th,td{
        width: 100px;
        min-width: 100px;
        line-height: 1.5;
    }
    .d-tbl tr th{
        float: left !important;
        text-align: left;
    }

    .border-line{
        border-top: 2px solid #999;
        border-bottom: 2px solid #999;
    }
</style>

<table class="d-tbl" width="100%" style="border: 1px solid rgb(204, 55, 55);padding: 8px">
    <tr>
        <th width="25%">Sample ID:</th>
        <td width="25%">{{ $patient->lab_id }}</td>
        

        <th width="25%">Specimen:</th>
        <td width="25%"><?= $patient->specimen?></td>
        
    </tr>
    <tr>
        <th width="25%">Patient's Name:</th>
        <td width="25%">{{ ucwords($patient->patient_name) }}</td>
        

        <th width="25%">Specimen Collection Site:</th>
        <td width="25%"><?= $patient->specimen_coll_site?></td>

    </tr>
    @php
        $address = ucfirst($patient->district) . ' - ' . $patient->ward;
    @endphp
    <tr>
        <th width="25%">Address:</th>
        <td width="25%"><?= $address?></td>

        <th width="35%">Specimen Collection Date & Time:</th>
        <td width="25%"><?= $patient->specimen_coll_time?></td>
        
    </tr>

    <tr>
        <th width="25%">Age/Gender:</th>
        <td width="25%">{{ $patient->patient_age . ' / '. ucfirst($patient->gender) }}</td>
        
        <th width="25%">Reporting Date & Time:</th>
        <td width="25%">{{ $patient->reporting_time }}</td>
    </tr>

    <tr>
        <th width="25%">Phone:</th>
        <td width="25%">{{ $patient->phone }}</td>

        <th width="25%">Referring Physician:</th>
        <td width="25%"><?= $patient->refering_physician?></td>
    </tr>

    <tr>
        
        <th width="25%">DOB:</th>
        <td width="25%">{{ $patient->dob }}</td>
       
    </tr>

    <tr>
        <th width="25%">Passport No.:</th>
        <td width="25%">{{ $patient->passport }}</td>


        
    </tr>
    <tr>
        <th width="25%">Email:</th>
        <td width="25%"><?= $patient->email?></td>
    </tr>
    
</table>

<table class="d-tbl" width="100%" style="margin-top: 50px;border: 1px solid rgb(204, 55, 55);padding: 8px">
    <tr>
        <th width="50%" class="border-line">Investigation</th>
        <th width="50%" class="border-line">Value (CT.)</th>
    </tr>
    <tr>
        <td width="50%">COVID-19 (SARS-Cov-2) RT-PCR</td>
        <td width="50%"></td>
    </tr>
    <tr>
        <td width="50%">E-GENE</td>
        @if($patient->e_gene)
        <td width="50%">{{ $patient->e_gene}}</td>
        @else
        <td width="50%">-</td>
        @endif
    </tr>
    <tr>
        <td width="50%">N-GENE</td>
        @if($patient->n_gene)
        <td width="50%">{{ $patient->n_gene}}</td>
        @else
        <td width="50%">-</td>
        @endif
    </tr>
    <tr>
        <td width="50%">ORF-lab</td>
        @if($patient->orf_lb)
        <td width="50%">{{ $patient->orf_lb}}</td>
        @else
        <td width="50%">-</td>
        @endif
    </tr>
    <tr>
        <?php 
            if($patient->result == 'N'){
                $res = 'NEGATIVE';
            }elseif($patient->result == 'P'){
                $res = 'POSITIVE';
            }else{
                $res = '-';
            }
        ?>
        <td width="150" class="border-line"><b>RESULT</b></td>
        <td width="150" class="border-line"><b>{{ $res }}</b></td>
    </tr>
</table>

<h4>Assay Description</h4>
<p style="font-size: 12px">This Assay has been performed for qualitative detection of the ORF-1ab and N genes of SARS-CoV-2 RNA using CE IVD/USFDA kits.  Internal control targeting the RNase P gene has been used to monitor the sample collection, sample handling and RT- PCR process to avoid false-negative results. The LoD of the kit is 200 copies/µl.						
</p>
<p style="font-size: 12px">Negative Result does not rule out the possibility of COVID-19 infection. Clinical symptoms and other laboratory findings should be considered before making final decision. 						
</p>
<p style="font-size: 12px">PCR is a highly sensitive technique, common reasons for paradoxical results are contamination during specimen collection, selection of inappropriate specimen, improper specimen transport and storage and presence of PCR Inhibitors in the specimen.						
</p>


 <table width="100%" style="border:transparent !important;margin-top: 20px;">
     <tr>
         <td>
            <ul style="list-style: none;margin-left: -10px;">
                <li><b>Performed By:</b></li>
                <li>Niru Maharjan</li>
                <li>B. Sc. MLT</li>
                <li>NHPC No.: A-1949 MLT</li>
            </ul>
        
            
         </td>
         <td style="float-left;text-align: left;"><img src="{{ realpath('pdf_assets/niru.png') }}" width="50%"></td>
         <td></td>
         
     </tr>
     <tr>
         <td>
            <ul style="list-style: none !important;margin-left: -10px;">
                <li><b>Approved By:</b></li>
                <li>Sunil Paudel</li>
                <li>M. Sc. Medical Microbiology</li>
                <li>NHPC No.: 92 Med. Micro</li>
            </ul>
         </td>
         <td><img src="{{ realpath('pdf_assets/sunil.png') }}" width="50%"></td>
         {{-- <td><img src="{{ realpath('pdf_assets/stamp1.png') }}" width="50%"></td> --}}
         
     </tr>
 </table>
    
   

