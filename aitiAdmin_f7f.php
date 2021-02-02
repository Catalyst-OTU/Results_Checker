<?php
session_start();

include('includes/header.php');
include('includes/admin_navbar.php');

?>





        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="https://www.aiti-kace.com.gh" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-internet fa-sm text-white-50">LINK TO AITI-KACE OFFICIAL PAGE </i> </a>
          </div>

          


<!---------------ADMIN DASHBOARD-------->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total registered Admin</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
                      $connection = mysqli_connect("localhost","root","","aiti");

                      $query = "SELECT id FROM admin_profile ORDER BY id";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h4> Total Admins: '.$row.'</h4>';

                      ?>

                      </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
</div>



  <!-- Begin Page Content -->
  <div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">AITI-KACE STUDENTS DATATABLE</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Year</th>
            <th>Course</th>
            <th>Sutdent ID</th>
            <th>Date of Birth</th>
          </tr>
        </thead>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Year</th>
            <th>Course</th>
            <th>Sutdent ID</th>
            <th>Date of Birth</th>
          </tr>
        </tfoot>
        <tbody>

        <tr>
            <td>1</td>
            <td>Bismark</td>
            <td>Otu</td>
            <td>0549057688</td>
            <td>bismarkotu1006@gmail.com</td>
            <td>2011/04/25</td>
            <td>CSD1.1444</td>
            <td>CSD1.1 2346444</td>
            <td>25/06/1995</td>
          </tr>
        <tr>
            <td>2</td>
            <td>Stephen</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2011/07/25</td>
            <td>CCNA1.1</td>
            <td>CCNA1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Oscar</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2009/01/12</td>
            <td>ICDL2.5</td>
            <td>ICDL.2.5 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Francis</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2012/03/29</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Richmond</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2008/11/28</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Benedicta</td>
            <td>Bediako</td>
            <td>0544866229</td>
            <td>benedictabediako1274@gmail.com</td>
            <td>2012/12/02</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Richard</td>
            <td>Asante</td>
            <td>0547239801</td>
            <td>richardasante43@gmail.com</td>
            <td>2012/08/06</td>
            <td>NIS1.944</td>
            <td>NIS1.9 2346444</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Nicholas</td>
            <td>Tetteh</td>
            <td>024145679</td>
            <td>nicholastettehaddo234@gmail.com</td>
            <td>2010/10/14</td>
            <td>DBC2.244</td>
            <td>DBC2.2 2346444</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>9</td>
            <td>Daniel</td>
            <td>Kyeremateng</td>
            <td>0540657292</td>
            <td>kyerematengdaniel375@gmail.com</td>
            <td>2009/09/15</td>
            <td>ICDL2.5</td>
            <td>ICDL.2.5 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>10</td>
            <td>Moses</td>
            <td>Otu</td>
            <td>0555560810</td>
            <td>mosesannorotu20@gmail.com</td>
            <td>2008/12/13</td>
            <td>ICDL2.5</td>
            <td>ICDL.2.5 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>11</td>
            <td>Jena Gaines</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2009/01/12</td>
            <td>ICDL2.5</td>
            <td>ICDL.2.5 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>12</td>
            <td>Quinn Flynn</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2009/01/12</td>
            <td>ICDL2.5</td>
            <td>ICDL.2.5 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>13</td>
            <td>Charde Marshall</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2008/10/16</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>14</td>
            <td>Haley Kennedy</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2012/12/18</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>15</td>
            <td>Tatyana Fitzpatrick</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2010/03/17</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>16</td>
            <td>Michael Silva</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2012/11/27</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>17</td>
            <td>Paul Byrd</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2010/06/09</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>18</td>
            <td>Gloria Little</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2009/04/10</td>
            <td>ICDL2.5</td>
            <td>ICDL.2.5 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>19</td>
            <td>Bradley Greer</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2012/10/13</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>20</td>
            <td>Dai Rios</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2012/09/26</td>
            <td>ICDL2.5</td>
            <td>ICDL.2.5 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>21</td>
            <td>Jenette Caldwell</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2011/09/03</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>22</td>
            <td>Yuri Berry</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2009/06/25</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>23</td>
            <td>Caesar Vance</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2011/12/12</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>24</td>
            <td>Doris Wilder</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2010/09/20</td>
            <td>ICDL2.5</td>
            <td>ICDL.2.5 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>25</td>
            <td>Angelica Ramos</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2009/10/09</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr><td>26</td>
            <td>Gavin Joyce</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2010/12/22</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>27</td>
            <td>James</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2010/11/14</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr><td>28</td>
            <td>Brenden Wagner</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2011/06/07</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr><td>29</td>
            <td>Fiona Green</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2010/03/11</td>
            <td>ICDL2.5</td>
            <td>ICDL.2.5 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr><td>30</td>
            <td>Shou Itou</td>
            <td>Opoku</td>
            <td>0547648288</td>
            <td>oscaropoku195@gmail.com</td>
            <td>2011/08/14</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
         
         
          <tr><td>31</td>
            <td>Serge Baldwin</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2012/04/09</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr><td>32</td>
            <td>Zenaida Frank</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2010/01/04</td>
            <td>ICDL2.5</td>
            <td>ICDL.2.5 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr><td>33</td>
            <td>Zorita Serrano</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2012/06/01</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr><td>34</td>
            <td>Jennifer Acosta</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2013/02/01</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr><td>35</td>
            <td>Cara Stevens</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2011/12/06</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr><td>36</td>
            <td>Hermione Butler</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2011/03/21</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr><td>37</td>
            <td>Lael Greer</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2009/02/27</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr><td>38</td>
            <td>Jonas Alexander</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2010/07/14</td>
            <td>ICDL2.5</td>
            <td>ICDL.2.5 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr><td>39</td>
            <td>Shad Decker</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2008/11/13</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr><td>40</td>
            <td>Michael Bruce</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2011/06/27</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr><td>41</td>
            <td>Donna Snider</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2011/01/25</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>42</td>
            <td>Garrett Winters</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2011/07/25</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>43</td>
            <td>Ashton Cox</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2009/01/12</td>
            <td>ICDL2.5</td>
            <td>ICDL.2.5 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>44</td>
            <td>Cedric Kelly</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2012/03/29</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>45</td>
            <td>Airi Satou</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2008/11/28</td>
            <td>ICDL2.5</td>
            <td>ICDL.2.5 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>46</td>
            <td>Brielle Williamson</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2012/12/02</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>47</td>
            <td>Herrod Chandler</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2012/08/06</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>48</td>
            <td>Rhona Davidson</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2010/10/14</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>49</td>
            <td>Colleen Hurst</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2009/09/15</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>50</td>
            <td>Terry</td>
            <td>Ketu</td>
            <td>0547825276</td>
            <td>stephenketu147@gmail.com</td>
            <td>2008/12/13</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          
          <tr>
            <td>51</td>
            <td>Tiger Nixon</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2011/04/25</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>52</td>
            <td>Garrett Winters</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2011/07/25</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>53</td>
            <td>Ashton Cox</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2009/01/12</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>54</td>
            <td>Cedric Kelly</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2012/03/29</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>55</td>
            <td>Airi Satou</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2008/11/28</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>56</td>
            <td>Brielle Williamson</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2012/12/02</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>57</td>
            <td>Herrod Chandler</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2012/08/06</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>58</td>
            <td>Rhona Davidson</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2010/10/14</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>59</td>
            <td>Colleen Hurst</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2009/09/15</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>60</td>
            <td>Joseph</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2008/12/13</td>
            <td>CYBER SECURITY1.4</td>
            <td>CYBER SECURITY1.4 2346</td>
            <td>25/06/1995</td>
          </tr>
          
          <tr>
            <td>61</td>
            <td>Tiger Nixon</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2011/04/25</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>62</td>
            <td>Garrett Winters</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2011/07/25</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>63</td>
            <td>Ashton Cox</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2009/01/12</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>64</td>
            <td>Cedric Kelly</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2012/03/29</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>65</td>
            <td>Airi Satou</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2008/11/28</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>66</td>
            <td>Brielle Williamson</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2012/12/02</td>
            <td>CISO2.2</td>
            <td>CISO2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>67</td>
            <td>Herrod Chandler</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2012/08/06</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>68</td>
            <td>Rhona Davidson</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2010/10/14</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>69</td>
            <td>Colleen Hurst</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2009/09/15</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>70</td>
            <td>Josuah</td>
            <td>Annan</td>
            <td>0542859342</td>
            <td>francisanna274@gmail.com</td>
            <td>2008/12/13</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>71</td>
            <td>Tiger Nixon</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2011/04/25</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>72</td>
            <td>Garrett Winters</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2011/07/25</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>73</td>
            <td>Ashton Cox</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2009/01/12</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>74</td>
            <td>Cedric Kelly</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2012/03/29</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>75</td>
            <td>Airi Satou</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2008/11/28</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>76</td>
            <td>Brielle Williamson</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2012/12/02</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>77</td>
            <td>Herrod Chandler</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2012/08/06</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>78</td>
            <td>Rhona Davidson</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2010/10/14</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>79</td>
            <td>Colleen Hurst</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2009/09/15</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>80</td>
            <td>Emmanuel</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2008/12/13</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>81</td>
            <td>Tiger Nixon</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2011/04/25</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>82</td>
            <td>Garrett Winters</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2011/07/25</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>83</td>
            <td>Ashton Cox</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2009/01/12</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>84</td>
            <td>Cedric Kelly</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2012/03/29</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>85</td>
            <td>Airi Satou</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2008/11/28</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>86</td>
            <td>Brielle Williamson</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2012/12/02</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>87</td>
            <td>Herrod Chandler</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2012/08/06</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>88</td>
            <td>Rhona Davidson</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2010/10/14</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>89</td>
            <td>Colleen Hurst</td>
            <td>Biantey</td>
            <td>024284423</td>
            <td>bianetyrichmond1234@gmail.com</td>
            <td>2009/09/15</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>90</td>
            <td>Ebenezer</td>
            <td>Tetteh</td>
            <td>024145679</td>
            <td>nicholastettehaddo234@gmail.com</td>
            <td>2008/12/13</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>91</td>
            <td>Tiger Nixon</td>
            <td>Tetteh</td>
            <td>024145679</td>
            <td>nicholastettehaddo234@gmail.com</td>
            <td>2011/04/25</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>92</td>
            <td>Garrett Winters</td>
            <td>Tetteh</td>
            <td>024145679</td>
            <td>nicholastettehaddo234@gmail.com</td>
            <td>2011/07/25</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>93</td>
            <td>Ashton Cox</td>
            <td>Tetteh</td>
            <td>024145679</td>
            <td>nicholastettehaddo234@gmail.com</td>
            <td>2009/01/12</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>94</td>
            <td>Cedric Kelly</td>
            <td>Tetteh</td>
            <td>024145679</td>
            <td>nicholastettehaddo234@gmail.com</td>
            <td>2012/03/29</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>95</td>
            <td>Airi Satou</td>
            <td>Tetteh</td>
            <td>024145679</td>
            <td>nicholastettehaddo234@gmail.com</td>
            <td>2008/11/28</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>96</td>
            <td>Brielle Williamson</td>
            <td>Tetteh</td>
            <td>024145679</td>
            <td>nicholastettehaddo234@gmail.com</td>
            <td>2012/12/02</td>
            <td>DBC2.2</td>
            <td>DBC2.2 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>97</td>
            <td>Herrod Chandler</td>
            <td>Tetteh</td>
            <td>024145679</td>
            <td>nicholastettehaddo234@gmail.com</td>
            <td>2012/08/06</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>98</td>
            <td>Rhona Davidson</td>
            <td>Tetteh</td>
            <td>024145679</td>
            <td>nicholastettehaddo234@gmail.com</td>
            <td>2010/10/14</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>99</td>
            <td>Colleen Hurst</td>
            <td>Tetteh</td>
            <td>024145679</td>
            <td>nicholastettehaddo234@gmail.com</td>
            <td>2009/09/15</td>
            <td>CSD1.1</td>
            <td>CSD1.1 2346</td>
            <td>25/06/1995</td>
          </tr>
          <tr>
            <td>100</td>
            <td>Collins</td>
            <td>Tetteh</td>
            <td>024145679</td>
            <td>nicholastettehaddo234@gmail.com</td>
            <td>2008/12/13</td>
            <td>CISA7.3</td>
            <td>CISA7.3 2346</td>
            <td>25/06/1995</td>
          </tr>

        
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
  <span>Copyright &copy; AITI-KACE 2020</span>
</div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
<a class="btn btn-primary" href="login.html">Logout</a>
</div>
</div>
</div>
</div>

<?php
include('includes/scripts.php');
?>

</body>

</html>