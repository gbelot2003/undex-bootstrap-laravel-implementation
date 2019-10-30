@extends('layouts.template')

@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-30">Exclusive Datatable</h4>

            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
                </thead>


                <tbody>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/mail-1.jpg" alt="">Tiger Nixon</td>
                    <td>System Architect</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/2.png" alt="">Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td><span class="btn btn-sm btn-label-success">$320,800</span></td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/mail-2.jpg" alt="">Garrett Winters</td>
                    <td>Accountant</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/3.png" alt="">Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/mail-3.jpg" alt="">Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/4.png" alt="">San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/mail-4.jpg" alt="">Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/5.png" alt="">Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td>$433,060</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/mail-5.jpg" alt="">Airi Satou</td>
                    <td>Accountant</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/6.png" alt="">Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td>$162,700</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/mail-6.jpg" alt="">Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/7.png" alt="">New York</td>
                    <td>61</td>
                    <td>2012/12/02</td>
                    <td>$372,000</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/1.png" alt="">Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/8.png" alt="">San Francisco</td>
                    <td>59</td>
                    <td>2012/08/06</td>
                    <td>$137,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/2.png" alt="">Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/9.png" alt="">Tokyo</td>
                    <td>55</td>
                    <td>2010/10/14</td>
                    <td>$327,900</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/3.png" alt="">Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/10.png" alt="">San Francisco</td>
                    <td>39</td>
                    <td>2009/09/15</td>
                    <td>$205,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/4.png" alt="">Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/11.png" alt="">Edinburgh</td>
                    <td>23</td>
                    <td>2008/12/13</td>
                    <td>$103,600</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/5.png" alt="">Jena Gaines</td>
                    <td>Office Manager</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/12.png" alt="">London</td>
                    <td>30</td>
                    <td>2008/12/19</td>
                    <td>$90,560</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/6.png" alt="">Quinn Flynn</td>
                    <td>Support Lead</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/13.png" alt="">Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/7.png" alt="">Charde Marshall</td>
                    <td>Regional Director</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/2.png" alt="">San Francisco</td>
                    <td>36</td>
                    <td>2008/10/16</td>
                    <td>$470,600</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/8.png" alt="">Haley Kennedy</td>
                    <td>Senior Marketing Designer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/3.png" alt="">London</td>
                    <td>43</td>
                    <td>2012/12/18</td>
                    <td>$313,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/9.png" alt="">Tatyana Fitzpatrick</td>
                    <td>Regional Director</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/4.png" alt="">London</td>
                    <td>19</td>
                    <td>2010/03/17</td>
                    <td>$385,750</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/10.png" alt="">Michael Silva</td>
                    <td>Marketing Designer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/5.png" alt="">London</td>
                    <td>66</td>
                    <td>2012/11/27</td>
                    <td>$198,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/11.png" alt="">Paul Byrd</td>
                    <td>Chief Financial Officer (CFO)</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/6.png" alt="">New York</td>
                    <td>64</td>
                    <td>2010/06/09</td>
                    <td>$725,000</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/12.png" alt="">Gloria Little</td>
                    <td>Systems Administrator</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/7.png" alt="">New York</td>
                    <td>59</td>
                    <td>2009/04/10</td>
                    <td>$237,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/1.png" alt="">Bradley Greer</td>
                    <td>Software Engineer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/8.png" alt="">London</td>
                    <td>41</td>
                    <td>2012/10/13</td>
                    <td>$132,000</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/2.png" alt="">Dai Rios</td>
                    <td>Personnel Lead</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/9.png" alt="">Edinburgh</td>
                    <td>35</td>
                    <td>2012/09/26</td>
                    <td>$217,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/3.png" alt="">Jenette Caldwell</td>
                    <td>Development Lead</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/10.png" alt="">New York</td>
                    <td>30</td>
                    <td>2011/09/03</td>
                    <td>$345,000</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/4.png" alt="">Yuri Berry</td>
                    <td>Chief Marketing Officer (CMO)</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/11.png" alt="">New York</td>
                    <td>40</td>
                    <td>2009/06/25</td>
                    <td>$675,000</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/5.png" alt="">Caesar Vance</td>
                    <td>Pre-Sales Support</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/12.png" alt="">New York</td>
                    <td>21</td>
                    <td>2011/12/12</td>
                    <td>$106,450</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/6.png" alt="">Doris Wilder</td>
                    <td>Sales Assistant</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/13.png" alt="">Sidney</td>
                    <td>23</td>
                    <td>2010/09/20</td>
                    <td>$85,600</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/7.png" alt="">Angelica Ramos</td>
                    <td>Chief Executive Officer (CEO)</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/2.png" alt="">London</td>
                    <td>47</td>
                    <td>2009/10/09</td>
                    <td>$1,200,000</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/8.png" alt="">Gavin Joyce</td>
                    <td>Developer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/3.png" alt="">Edinburgh</td>
                    <td>42</td>
                    <td>2010/12/22</td>
                    <td>$92,575</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/9.png" alt="">Jennifer Chang</td>
                    <td>Regional Director</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/4.png" alt="">Singapore</td>
                    <td>28</td>
                    <td>2010/11/14</td>
                    <td>$357,650</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/3.png" alt="">Brenden Wagner</td>
                    <td>Software Engineer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/5.png" alt="">San Francisco</td>
                    <td>28</td>
                    <td>2011/06/07</td>
                    <td>$206,850</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/10.png" alt="">Fiona Green</td>
                    <td>Chief Operating Officer (COO)</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/6.png" alt="">San Francisco</td>
                    <td>48</td>
                    <td>2010/03/11</td>
                    <td>$850,000</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/1.png" alt="">Shou Itou</td>
                    <td>Regional Marketing</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/7.png" alt="">Tokyo</td>
                    <td>20</td>
                    <td>2011/08/14</td>
                    <td>$163,000</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/2.png" alt="">Michelle House</td>
                    <td>Integration Specialist</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/8.png" alt="">Sidney</td>
                    <td>37</td>
                    <td>2011/06/02</td>
                    <td>$95,400</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/3.png" alt="">Suki Burks</td>
                    <td>Developer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/9.png" alt="">London</td>
                    <td>53</td>
                    <td>2009/10/22</td>
                    <td>$114,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/4.png" alt="">Prescott Bartlett</td>
                    <td>Technical Author</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/10.png" alt="">London</td>
                    <td>27</td>
                    <td>2011/05/07</td>
                    <td>$145,000</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/5.png" alt="">Gavin Cortez</td>
                    <td>Team Leader</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/11.png" alt="">San Francisco</td>
                    <td>22</td>
                    <td>2008/10/26</td>
                    <td>$235,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/6.png" alt="">Martena Mccray</td>
                    <td>Post-Sales support</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/12.png" alt="">Edinburgh</td>
                    <td>46</td>
                    <td>2011/03/09</td>
                    <td>$324,050</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/7.png" alt="">Unity Butler</td>
                    <td>Marketing Designer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/2.png" alt="">San Francisco</td>
                    <td>47</td>
                    <td>2009/12/09</td>
                    <td>$85,675</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/8.png" alt="">Howard Hatfield</td>
                    <td>Office Manager</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/3.png" alt="">San Francisco</td>
                    <td>51</td>
                    <td>2008/12/16</td>
                    <td>$164,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/9.png" alt="">Hope Fuentes</td>
                    <td>Secretary</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/4.png" alt="">San Francisco</td>
                    <td>41</td>
                    <td>2010/02/12</td>
                    <td>$109,850</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/10.png" alt="">Vivian Harrell</td>
                    <td>Financial Controller</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/5.png" alt="">San Francisco</td>
                    <td>62</td>
                    <td>2009/02/14</td>
                    <td>$452,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/11.png" alt="">Timothy Mooney</td>
                    <td>Office Manager</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/6.png" alt="">London</td>
                    <td>37</td>
                    <td>2008/12/11</td>
                    <td>$136,200</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/1.png" alt="">Jackson Bradshaw</td>
                    <td>Director</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/7.png" alt="">New York</td>
                    <td>65</td>
                    <td>2008/09/26</td>
                    <td>$645,750</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/2.png" alt="">Olivia Liang</td>
                    <td>Support Engineer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/8.png" alt="">Singapore</td>
                    <td>64</td>
                    <td>2011/02/03</td>
                    <td>$234,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/3.png" alt="">Bruno Nash</td>
                    <td>Software Engineer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/9.png" alt="">London</td>
                    <td>38</td>
                    <td>2011/05/03</td>
                    <td>$163,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/4.png" alt="">Sakura Yamamoto</td>
                    <td>Support Engineer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/10.png" alt="">Tokyo</td>
                    <td>37</td>
                    <td>2009/08/19</td>
                    <td>$139,575</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/5.png" alt="">Thor Walton</td>
                    <td>Developer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/11.png" alt="">New York</td>
                    <td>61</td>
                    <td>2013/08/11</td>
                    <td>$98,540</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/8.png" alt="">Finn Camacho</td>
                    <td>Support Engineer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/2.png" alt="">San Francisco</td>
                    <td>47</td>
                    <td>2009/07/07</td>
                    <td>$87,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/2.png" alt="">Serge Baldwin</td>
                    <td>Data Coordinator</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/3.png" alt="">Singapore</td>
                    <td>64</td>
                    <td>2012/04/09</td>
                    <td>$138,575</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/3.png" alt="">Zenaida Frank</td>
                    <td>Software Engineer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/4.png" alt="">New York</td>
                    <td>63</td>
                    <td>2010/01/04</td>
                    <td>$125,250</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/1.png" alt="">Zorita Serrano</td>
                    <td>Software Engineer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/5.png" alt="">San Francisco</td>
                    <td>56</td>
                    <td>2012/06/01</td>
                    <td>$115,000</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/4.png" alt="">Jennifer Acosta</td>
                    <td>Junior Javascript Developer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/6.png" alt="">Edinburgh</td>
                    <td>43</td>
                    <td>2013/02/01</td>
                    <td>$75,650</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/5.png" alt="">Cara Stevens</td>
                    <td>Sales Assistant</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/7.png" alt="">New York</td>
                    <td>46</td>
                    <td>2011/12/06</td>
                    <td>$145,600</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/6.png" alt="">Hermione Butler</td>
                    <td>Regional Director</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/8.png" alt="">London</td>
                    <td>47</td>
                    <td>2011/03/21</td>
                    <td>$356,250</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/7.png" alt="">Lael Greer</td>
                    <td>Systems Administrator</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/9.png" alt="">London</td>
                    <td>21</td>
                    <td>2009/02/27</td>
                    <td>$103,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/8.png" alt="">Jonas Alexander</td>
                    <td>Developer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/10.png" alt="">San Francisco</td>
                    <td>30</td>
                    <td>2010/07/14</td>
                    <td>$86,500</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/9.png" alt="">Shad Decker</td>
                    <td>Regional Director</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/11.png" alt="">Edinburgh</td>
                    <td>51</td>
                    <td>2008/11/13</td>
                    <td>$183,000</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/10.png" alt="">Michael Bruce</td>
                    <td>Javascript Developer</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/3.png" alt="">Singapore</td>
                    <td>29</td>
                    <td>2011/06/27</td>
                    <td>$183,000</td>
                </tr>
                <tr>
                    <td><img class="mr-2 chat-thumb" src="/images/member-img/11.png" alt="">Donna Snider</td>
                    <td>Customer Support</td>
                    <td><img class="mr-2 office-thumb" src="/images/currency-img/4.png" alt="">New York</td>
                    <td>27</td>
                    <td>2011/01/25</td>
                    <td>$112,000</td>
                </tr>
                </tbody>
            </table>

        </div> <!-- end card body-->
    </div> <!-- end card -->

@stop

@section('js')

@stop
