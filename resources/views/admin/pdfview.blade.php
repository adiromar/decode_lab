{{-- <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a> --}}

{{-- <img src="{{ public_path('pdf_assets/decode.png') }}" alt="logo" height="auto"> --}}
{{-- <img src="{{ public_path() . '\pdf_assets\decode.png' }}"> --}}

<img src="{{ public_path('pdf_assets/decode.png') }}" width="100%">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>COVID-19 Patient Report</title>
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

<style>

    * {
     font-family: "DejaVu Sans";
     font-size: 12px;
    }
    /* {
        width: auto;
        font: 17px Calibri;
    } */
    .d-tbl th, td 
    {
        border: solid 1px #DDD;
        border-collapse: collapse;
        padding: 2px 3px;
        text-align: center;
    }
    th,td{
        width: 100px;
        min-width: 100px;
    }
</style>

<table class="d-tbl" >
    <tr>
        <th width="150">Sample ID</th>
        <td width="150">-</td>
        <td width="150">-</td>

        <th width="150">Specimen</th>
        <td width="150"><?= $patient->specimen?></td>
        <td width="150">-</td>
    </tr>
    <tr>
        <th width="150">Patient's Name</th>
        <td width="150">{{ ucwords($patient->patient_name) }}</td>
        <td width="150">-</td>

        <th width="150">Specimen Collection Site</th>
        <td width="150"><?= $patient->specimen_coll_site?></td>
        <td width="150">-</td>
    </tr>
    <tr>
        <th width="150">Address</th>
        <td width="150"><?= $patient->address?></td>
        <td width="150">-</td>

        <th width="150">Specimen Collection Date</th>
        <td width="150"><?= $patient->specimen_coll_date?></td>
        <td width="150">-</td>
    </tr>

    <tr>
        <th width="150">Age/Gender</th>
        <td width="150">{{ $patient->patient_age }}</td>
        <td width="150">{{ $patient->gender }}</td>

        <th width="150">Specimen Collection Time</th>
        <td width="150"><?= $patient->specimen_coll_time?></td>
        <td width="150">-</td>
    </tr>

    <tr>
        <th width="150">Phone</th>
        <td width="150">{{ $patient->phone }}</td>
        <td width="150">-</td>

        <th width="150">Reporting Date</th>
        <td width="150"><?= $patient->reporting_date?></td>
        <td width="150">-</td>
    </tr>

    <tr>
        <th width="150">Email</th>
        <td width="150"><?= $patient->email?></td>
        <td width="150">-</td>

        <th width="150">Reporting Time</th>
        <td width="150"><?= $patient->reporting_time?></td>
        <td width="150">-</td>
    </tr>

    <tr>
        <th width="150">Passport No.</th>
        <td width="150">-</td>
        <td width="150">-</td>

        <th width="150">Referring Physician</th>
        <td width="150"><?= $patient->refering_physician?></td>
        <td width="150">-</td>
    </tr>
    
</table>

<table class="d-tbl" width="100%" style="margin-top: 50px;">
    <tr>
        <th width="50%">Investigation</th>
        <th width="50%">Value (CT.)</th>
    </tr>
    <tr>
        <td width="50%">COVID-19 (SARS-Cov-2) RT-PCR</td>
        <td width="50%"></td>
    </tr>
    <tr>
        <td width="50%">E-GENE</td>
        <td width="50%">{{ $patient->e_gene}}</td>
    </tr>
    <tr>
        <td width="50%">N-GENE</td>
        <td width="50%">{{ $patient->n_gene}}</td>
    </tr>
    <tr>
        <td width="50%">ORF-lab</td>
        <td width="50%">{{ $patient->orf_lb}}</td>
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
        <td width="150"><b>RESULT</b></td>
        <td width="150"><b>{{ $res }}</b></td>
    </tr>
</table>

<h4>Assay Description</h4>
<p style="font-size: 12px">This assay has been performed for qualitative detection of the ORF-1ab and N genes of SARS-CoV-2 RNA using CE IVD/USFDA kits.  Internal control targeting the RNase P gene has been used to monitor the sample collection, sample handling and RT- PCR process to avoid false-negative results. The LoD of the kit is 200 copies/µl.						
</p>
<p style="font-size: 12px">Negative Result does not rule out the possibility of COVID-19 infection. Clinical symptoms and other laboratory findings should be considered before making final decision. 						
</p>
<p style="font-size: 12px">PCR is a highly sensitive technique, common reasons for paradoxical results are contamination during specimen collection, selection of inappropriate specimen, improper specimen transport and storage and presence of PCR Inhibitors in the specimen.						
</p>


 <table width="100%" style="border:none;margin-top: 20px;">
     <tr>
         <td>
            <ul style="list-style: none;margin-left: -10px;">
                <li><b>Performed By:</b></li>
                <li>Niru Maharjan</li>
                <li>B. Sc. MLT</li>
                <li>NHPC No.: A-1949 MLT</li>
            </ul>
        
            
         </td>
         <td><img src="{{ public_path('pdf_assets/niru.png') }}" width="50%"></td>
         <td>
            <ul style="list-style: none;margin-left: -10px;">
                <li><b>Approved By:</b></li>
                <li>Sunil Paudel</li>
                <li>M. Sc. Medical Microbiology</li>
                <li>NHPC No.: 92 Med. Micro</li>
            </ul>
        
            
         </td>
         <td><img src="{{ public_path('pdf_assets/sunil.png') }}" width="50%"></td>
     </tr>
 </table>
    
   

    


{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     --}}


