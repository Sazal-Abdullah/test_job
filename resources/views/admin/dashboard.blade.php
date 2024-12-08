@extends('admin.layouts.master')


@section('content')

<div class="pages tab-content" id="nav-tabContent">
    <div class="page-1 overflow-scroll overflow-x-hidden tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
       <div class=" count-row row p-1">
          <div class="col p-3">
           <div class="counter  h-100 w-100 d-flex  bg-1">
               <div class="counter-l h-100 w-50 p-3">
                   <div class="count-i rounded-circle i-bg wht text-center align-content-center">
                       <i class="far fa-eye"></i>
                   </div>
                  <h2 class="text-light fw-bolder mt-4">$<span class="count">356</span>K</h2>
                  <span style="color: gray;">Total Views</span>
               </div>
               <div class="count-r h-100 w-50 p-4 pb-5 text-end align-content-end">
                   <span class="text-success fw-bold">0.43%</span>
               </div>
           </div>
          </div>
          <div class="col p-3">
           <div class="counter  h-100 w-100 d-flex bg-1">
               <div class="counter-l h-100 w-50 p-3">
                   <div class="count-i rounded-circle i-bg wht text-center align-content-center">
                       <i class="fab fa-bitcoin"></i>
                   </div>
                  <h2 class="text-light fw-bolder mt-4">$<span class="count">247</span>K</h2>
                  <span style="color: gray;">Total Profit</span>
               </div>
               <div class="count-r h-100 w-50 p-4 pb-5 text-end align-content-end">
                   <span class="text-success fw-bold">4.35%</span>
               </div>
           </div>
          </div>
          <div class="col p-3">
           <div class="counter  h-100 w-100 d-flex bg-1">
               <div class="counter-l h-100 w-50 p-3">
                   <div class="count-i rounded-circle i-bg wht text-center align-content-center">
                       <i class="fas fa-shopping-cart"></i>
                   </div>
                  <h2 class="text-light fw-bolder mt-4"><span class="count">293</span></h2>
                  <span style="color: gray;">Total Products</span>
               </div>
               <div class="count-r h-100 w-50 p-4 pb-5 text-end align-content-end">
                   <span class="text-success fw-bold">2.59%</span>
               </div>
           </div>
          </div>
          <div class="col p-3">
           <div class="counter  h-100 w-100 d-flex  bg-1">
               <div class="counter-l h-100 w-50 p-3">
                   <div class="count-i rounded-circle i-bg wht text-center align-content-center">
                       <i class="fas fa-users"></i>
                   </div>
                  <h2 class="text-light fw-bolder mt-4"><span class="count">4322</span></h2>
                  <span style="color: gray;">Total Users</span>
               </div>
               <div class="count-r h-100 w-50 p-4 pb-5 text-end align-content-end">
                   <span class="text-danger fw-bold">0.95%</span>
               </div>
           </div>
          </div>
       </div>
       <div class="chart-row row">
           <div class="coll col-md-8 p-4 ">
               <div class="chart-1 h-100 w-100 bg-1 d-flex justify-content-center overflow-scroll pt-5">
                   <div id="chart">
                       <div id="timeline-chart"></div>
                     </div>
               </div>
           </div>
           <div class="coll col-md-4 p-4">
               <div class="chart-2 h-100 w-100 bg-1">
                   <div id="chart" >
                       <div id="apex-chart" class="pt-5"></div>
                     </div>
               </div>
           </div>
       </div>
       <div class="chart-row row">
           <div class="chart-row row">
               <div class="coll col-md-5 p-4 ">
                   <div class="chart-1 h-100 w-100 bg-1 overflow-scroll p-2 ps-3">
                       <h3 class="text-success">LIVE</h3>
                       <div class="analog-clock m-auto">
                           <div class="display">
                             <div class="handbase hour"></div>
                             <div class="handbase minute"></div>
                             <div class="handbase second"></div>
                           </div>
                         </div>
                         <div class="digital-time m-auto w-50 text-center">
                           <p></p>
                         </div>
                   </div>
               </div>
           <div class="coll col-md-7 p-4">
               <div class="chart-2 h-100 w-100 bg-1 p-3">
                   <h3 class="text-light">OUR PRODUCTIONS</h3>
                   <div id="chartdiv"></div>
               </div>
           </div>
       </div>
    </div>

    <div class="table-row row">
       <div class="col col-sm-12 col-md-12 col-lg-8 p-4">
             <div class="tble h-100 w-100 bg-1">
               <h2 class="text-light ms-4">Our Employes</h2>
               <table class="table table-fluid table-dark table-hover">
                 <thead class="table-dark-subtle">
                   <tr class="">
                     <th scope="col">#</th>
                     <th scope="col">First</th>
                     <th scope="col">Last</th>
                     <th scope="col">Profit</th>
                     <th scope="col">los</th>
                     <th scope="col">Gains</th>
                   </tr>
                 </thead>
                 <tbody class="table-group-divider">
                  <tr>
                   <td>21</td>
                   <td>SAZAL ABDULLAH</td>
                   <td>Ladumor</td>
                   <td class="text-success">+4.34</td>
                   <td class="text-danger">-3.2</td>
                   <td class="text-primary">21.5</td>
                  </tr>
                  <tr>
                   <td>34</td>
                   <td>Darshan</td>
                   <td>Kalsariya</td>
                   <td class="text-success">+5.34</td>
                   <td class="text-danger">-2.3</td>
                   <td class="text-primary">12.4</td>
                  </tr>
                  <tr>
                   <td>34</td>
                   <td>yuvraj</td>
                   <td>Dasadiya</td>
                   <td class="text-success">+7.43</td>
                   <td class="text-danger">-3.2</td>
                   <td class="text-primary">21.5</td>
                  </tr>
                  <tr>
                   <td>32</td>
                   <td>Harshil</td>
                   <td>Kantariya</td>
                   <td class="text-success">+2.43</td>
                   <td class="text-danger">-3.21</td>
                   <td class="text-primary">32.2</td>
                  </tr>
                  <tr>
                   <td>65</td>
                   <td>Taksh</td>
                   <td>Parana</td>
                   <td class="text-success">+6.43</td>
                   <td class="text-danger">-8.32</td>
                   <td class="text-primary">21.5</td>
                  </tr>
                  <tr>
                   <td>53</td>
                   <td>tarakh</td>
                   <td>Patel</td>
                   <td class="text-success">+3.21</td>
                   <td class="text-danger">-6.32</td>
                   <td class="text-primary">54.2</td>
                  </tr>
                  <tr>
                   <td>54</td>
                   <td>Ravi</td>
                   <td>Rajkumar</td>
                   <td class="text-success">+12.4</td>
                   <td class="text-danger">-7.43</td>
                   <td class="text-primary">65.3</td>
                  </tr>
                  <tr>
                   <td>34</td>
                   <td>Rajkumar</td>
                   <td>Rao</td>
                   <td class="text-success">+12.3</td>
                   <td class="text-danger">-2.5</td>
                   <td class="text-primary">32.3</td>
                  </tr>
                  <tr>
                   <td>54</td>
                   <td>kelly</td>
                   <td>Adson</td>
                   <td class="text-success">+3.33</td>
                   <td class="text-danger">-9.53</td>
                   <td class="text-primary">53.03</td>
                  </tr>
                 </tbody>
               </table>
             </div>
       </div>
       <div class="col col-sm-12 col-md-12 col-lg-4 p-4">
         <div class="h-100 w-100 bg-1 ps-1 pt-2">
           <h2 class="text-light ms-4">Chats</h2>
           <div class="chat  d-flex align-items-center gap-2 position-relative mt-4">
             <div class="chat-pic rounded-circle position-relative">
               <div class="act-status w-25 ratio ratio-1x1 rounded-circle bg-success translate-middle position-absolute border" style="top: 90%
               ;left: 90%;"></div>
                <img src="https://c1.wallpaperflare.com/preview/876/356/902/boy-businessman-close-up-eyes.jpg" alt="" class="h-100 w-100 rounded-circle img-fluid">
             </div>
             <div class="chat-text h-75 w-50 d-flex flex-column">
                 <h6 class="text-light d-inline">SAZAL ABDULLAH </h6>
                <span class="text-light"> Hello, how are you?.<span style="color: gray;">12min</span></span>
             </div>
             <div class="noti-number bg-primary rounded-circle d-flex align-items-center justify-content-center text-light position-absolute">
                     3
             </div>
           </div>
           <div class="chat  d-flex align-items-center gap-2 position-relative mt-4">
             <div class="chat-pic rounded-circle position-relative">
               <div class="act-status w-25 ratio ratio-1x1 rounded-circle bg-success translate-middle position-absolute border" style="top: 90%
               ;left: 90%;"></div>
                <img src="https://st.depositphotos.com/1594308/2526/i/450/depositphotos_25262411-stock-photo-businessman.jpg" alt="" class="h-100 w-100 rounded-circle img-fluid">
             </div>
             <div class="chat-text h-75 w-50 d-flex flex-column">
                 <h6 class="d-inline" style="color: gray;">Darshan </h6>
                <span class="" style="color: gray;"> i am waiting for .<span style="color: gray;">30min</span></span>
             </div>
           </div>
           <div class="chat  d-flex align-items-center gap-2 position-relative mt-4">
             <div class="chat-pic rounded-circle position-relative">
               <div class="act-status w-25 ratio ratio-1x1 rounded-circle bg-info translate-middle position-absolute border" style="top: 90%
               ;left: 90%;"></div>
                <img src="https://as1.ftcdn.net/v2/jpg/02/12/97/30/1000_F_212973054_kUDl0rW0jAU6WUKmgrbUJOKla20ixuvY.jpg" alt="" class="h-100 w-100 rounded-circle img-fluid">
             </div>
             <div class="chat-text h-75 w-50 d-flex flex-column">
                 <h6 class="d-inline" style="color: gray;">Yuvraj d</h6>
                <span class="" style="color: gray;"> Where are you?.<span style="color: gray;">50min</span></span>
             </div>
           </div>
           <div class="chat  d-flex align-items-center gap-2 position-relative mt-4">
             <div class="chat-pic rounded-circle position-relative">
               <div class="act-status w-25 ratio ratio-1x1 rounded-circle bg-success translate-middle position-absolute border" style="top: 90%
               ;left: 90%;"></div>
                <img src="https://img.freepik.com/premium-photo/face-happy-handsome-hispanic-businessman-smiling_251136-89028.jpg" alt="" class="h-100 w-100 rounded-circle img-fluid">
             </div>
             <div class="chat-text h-75 w-50 d-flex flex-column">
                 <h6 class="text-light d-inline">Ravi Rao</h6>
                <span class="text-light">Thank you! .<span style="color: gray;">12min</span></span>
             </div>
             <div class="noti-number bg-primary rounded-circle d-flex align-items-center justify-content-center text-light position-absolute">
                     2
             </div>
           </div>
           <div class="chat  d-flex align-items-center gap-2 position-relative mt-4">
             <div class="chat-pic rounded-circle position-relative">
               <div class="act-status w-25 ratio ratio-1x1 rounded-circle bg-danger translate-middle position-absolute border" style="top: 90%
               ;left: 90%;"></div>
                <img src="https://st2.depositphotos.com/4196725/6570/i/950/depositphotos_65701053-stock-photo-face-of-a-businessman.jpg" alt="" class="h-100 w-100 rounded-circle img-fluid">
             </div>
             <div class="chat-text h-75 w-50 d-flex flex-column">
                 <h6 class="d-inline" style="color: gray;">Amit raj</h6>
                <span class="" style="color: gray;">i like that .<span style="color: gray;">30min</span></span>
             </div>
           </div>
           <div class="chat  d-flex align-items-center gap-2 position-relative mt-4">
             <div class="chat-pic rounded-circle position-relative">
               <div class="act-status w-25 ratio ratio-1x1 rounded-circle bg-danger translate-middle position-absolute border" style="top: 90%
               ;left: 90%;"></div>
                <img src="https://i.pinimg.com/736x/5c/91/7a/5c917a46cdce453fe8c3d11b0d5618db.jpg" alt="" class="h-100 w-100 rounded-circle img-fluid">
             </div>
             <div class="chat-text h-75 w-50 d-flex flex-column">
                 <h6 class="d-inline" style="color: gray;">Mayank Agraj</h6>
                <span class="" style="color: gray;"> i Love That!.<span style="color: gray;">30min</span></span>
             </div>
           </div>

         </div>
       </div>
    </div>
    </div>


   <div class="page-1 overflow-scroll p-3 tab-pane fade active show px-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
     <div class="chart-date w-100 p-2 d-flex justify-content-between">
       <div class="chart-m-date h-100 bg-1">
            <input type="date" name="" id="" class="form-control h-100 w-100 bg-dark-subtle">
       </div>
       <div class="chart-year h-100 bg-1">
           <select name="" id="" class="form-control bg-dark-subtle h-100 w-100 p-0 ps-2">
             <option>yearly</option>
             <option>Monthly</option>
           </select>
       </div>

     </div>
     <div class="p2-m-chart w-100 bg-1 mt-4 align-content-center">
       <h2 class="wht ms-4">E-commerce</h2>
       <canvas id="canvas" class="h-75 w-100"></canvas>
     </div>
     <div class="p2-counter bg-1 mt-4 align-items-center">
          <div class="row h-100 row-cols-1 row-cols-md-2 row-cols-lg-4 align-items-center">
           <div class="col h-100  d-flex align-items-center justify-content-around"><div class="p2-count h-50 w-50 display-6 fw-bolder text-light">$ <span class="count">2343</span> <br><span style="color: gray;font-size: 16px;">Unique Visitors</span></div> <span class="text-success">+18%</span></div>
           <div class="col h-100  d-flex align-items-center justify-content-around"><div class="p2-count h-50 w-50 display-6 fw-bolder text-light">$ <span class="count">423</span>k<br><span style="color: gray;font-size: 16px;">Total Pageviews</span></div> <span class="text-success">+25%</span></div>
           <div class="col h-100  d-flex align-items-center justify-content-around"><div class="p2-count h-50 w-50 display-6 fw-bolder text-light">$ <span class="count">40</span>%<br><span style="color: gray;font-size: 16px;">Bounce Rate</span></div> <span class="text-danger">-7.4%</span></div>
           <div class="col h-100  d-flex align-items-center justify-content-around"><div class="p2-count h-50 w-50 display-6 fw-bolder text-light">3m34s<br><span style="color: gray;font-size: 16px;">Visit Duration</span></div> <span class="text-success">+18%</span></div>
          </div>
     </div>
     <div class="p2-charts row w-100 mt-4">
       <div class="col col-md-5 col-sm-12 p-2">
         <div class="chartt h-100 w-100 pt-4 d-flex align-items-center" style="  background: linear-gradient(45deg, #4bbfef 0%, #025bfa 100%);">
           <div class="Map-container h-50 w-100">
             <svg id="Map-svg" viewBox="0 0 670.2 432.4" style="enable-background:new 0 0 670.2 432.4;" xml:space="preserve" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
               <defs>
                  <linearGradient id="Map-gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                   <stop offset="0%" stop-color="#fff" stop-opacity="0.10" />
                   <stop offset="100%" stop-color="#fff" stop-opacity="0.35" />
                 </linearGradient>
                 <clipPath id="Map-mask">
                   <use xlink:href="#Map-globe"></use>
                 </clipPath>
               </defs>
               <g clip-path="url(#Map-mask)" fill="url(#Map-gradient)" id="Map-shape">
                 <path id="Map-globe" d="M338,49.3l7.5-0.6l7.7-6.7h10.6l6.2-2.4v5l-2.9,5.5l1.5,0.1l-3.5,4.1l5.2,5.7l-14.8,13.8l-3.4,0.2l-6.2-4.7l0,0
                   v-3.9l-4-4.4v-7.5l-4-3.4L338,49.3L338,49.3z M312,166v9.1l10.7,10.9H320l-0.6,9H296v-20.7l12.5-12.8L312,166z M134,26.4l20.5-7.4h7
                   l12.8-13h22.9H197v8.6l-15,15v18.1l-12,12.6V79h-11.6l-5.1-7l4.2-9.1L134,42.7V26.4z M201.4,132.1l-7.4,6.5V160h-0.6L180,143.2
                   v-17.4l-17.6-17.7l-9,8.6l-7.2-6.9l-5.3,4.4L125.2,101h53.3l13.5,12v8.4L201.4,132.1z M123.1,57.1l14.5-0.1l6.8,5.1l-4.6,3.3
                   L157.3,86h12.5l6.3,5H140l-17-17.8L123.1,57.1z M107.5,73l6.5,7.3V93h-4.5L94.1,77.8L93.8,73H107.5z M78,95h21.2l6.3,6h8l22.2,22.7
                   l-1.5,2.3h-7.8l-4.2-4.2L118,126h-10.3l-10.5-11h-5.8L78,101.6V95z M247,315v18.3L219,362v7l-27,28.7V409l-5,3.7v19.7l-10-10.7v-32
                   l3-3.3v-20l2-3.7V345l-21-21.3v-21.3l5.8-5.3l-12.1-13h-15.2l-11-12h-3.7L96,243.3v-6.7l-15-14v-29L53.8,165H40.2l-15.4,9.6L7,157.3
                   v-14.7L0,136v-16.3l18.5-4.6h12.7l5,5h14.7l5.7,4h41.1l9.6,11h11l4.3-4.3l4.3,4.3h12l7.3-11.5l6.1,3.5l6.3-8.1l4.4,7.4v8.7l-22,22.3
                   V180h14.5l13.5,11.6v-12.9l7-7l-5-5V157h12.2l34,34.3L191.8,217H182l-8,8v5.3l-13.7,13v3.3l2.1,3.4l-0.1,6.4l-3,0.1l-3.6-6.5
                   l-23.8,0.3v12L142,273l9.9-2v1.6l17.8,17.4h46.7l23.3,25H247L247,315z M262.3,131l-22.3,8.7v2.7l-6,6.2V166l-16-15v-37.2l-10-9.6
                   V86.4l-6.4-7.4H181V59.6l6-7.2V31.1l18.1-0.1l15.3-15h9.5l16.2-16h17.1l15.9,13.1l-4.4,1.7l5.9,7.7l6.8-3.5h6l8.6,8.5l-20,13.1v25.3
                   l-3,3.9v19.7l-2,6.9l3.2,20.3L269.7,131H262.3z M272,145.1v-6.4l12.5-0.8h7.5v2.7l-0.5,13.3h-10.8L272,145.1z M412,339.8l-6,5.5V361
                   h-5v-25.7l11-11.4V339.8z M395,309.2v24.3l-11,9.3v8.6l-4,4.3v7l-4.1,17.3h-13.7L343,361.5v-16l-5-4.9v-28.9l-5-5V301h-28.6
                   L285,282.3V255l28.7-15h7.1l4.8-5H337v6h12.1l5.9,7v-3h18.8l13.2,15v8.3l21.5,20.7h6.7L395,309.2z M525.3,322.6H509v-3.2L498.7,309
                   v-6.7l12.2,12.2h12.5l4.2,4.2L525.3,322.6z M600.3,400l-3.2-4.3l0.3-3.1h4.3L600.3,400z M591.6,388l-2.8-2.7l0.2-6.3h-7.3l-5.3-6
                   H564l-4.6,6h-8.6l-2.8,1h-12v-16.2l-0.6-2l2.9-9l6.5-2.9h5.2l15.2-15H576v-3.1l10,10.6V331h3l6,4v3.8l10,12.2l0.1,37.1h-13.5V388z
                    M533.6,313.8L552,298l-1.3,23.3l-7.6,2.7L533.6,313.8z M590.3,219.3h-5.5l-2.3,3.2l2.4,3.5l0.1,9l-10.3,7.7v2l-2.1,1.3l-3.4-2.7
                   l0.1-6.5l10.5-8.2l-0.1-11.3l6.8-7.8l8,4.7L590.3,219.3z M600.8,327h-16.3l-8.2-8.6l3-3.4h18.6l3.1,2.4L600.8,327z M654,142.2v4.1
                   L612.7,190l1.9-16.4l8.7-11.5l-10.6,9h-19l-13.5,14h3.8v14.3l-21.2,24.4l6.6,4.7l-7.1,5.7l-6.3-3.6v-2.8l-7.2-6.2l-5.8,4.9v6.2l5,4
                   v12.9l-4.5,17.6h-14.6l-8.3,1.8l8.4,9.4v3.8l-6.8,11.5L516,286v9.3l2.1,3.2l-0.6,6l-5.8-0.5l-2-7.5l-0.2-16.4L495.9,266h-4
                   l-15.3,12.7l-0.3,4l-5.1,6.2l-8.4-8.1l-0.2-9.7L449.2,261h-15.3l6,5.8L422.5,284h-11.7L392,266.1v-7.9l-15.3-16l7.4-6.2h-8.6
                   l-22.2-25.1l-4.4-2.9v4.6l6.3,6.6v4.7l-3.8,2l-10.1-6.9h-7l-16.1,16h-8.5L299,224.2V219h16v-15.6l20.9-16.4h21.6l4.6-17.4v-9.3h-3
                   v-11.8l3-3.7l-12,3.5V181H341v-8h-14v-27.6l42.2-29.4h12.6l13.2,13.7v3.8l-6.5,5.9l-8.5-7.8v6.1l12.1,11.2l28.3-21.9h16.1l21-20h12
                   l25.7-25h15.9l12.5-13.1l5.7,6.1h8.2l-0.1,16.5l-8.9,9.5h30.2l8.8,9h44l14.3,14h16.3l2.3-3h15.5l10.3,11.4L654,142.2z"></path>
                 <g data-location="TR">
                   <circle class="Pin-back" cx="160" cy="210" r="2.5" fill="#fff" fill-opacity="0.5" />
                   <circle class="Pin-front" cx="160" cy="210" r="2.5" fill="#fff" />
                 </g>
                 <g data-location="NY">
                   <circle class="Pin-back" cx="174" cy="222" r="2.5" fill="#fff" fill-opacity="0.5" />
                   <circle class="Pin-front" cx="174" cy="222" r="2.5" fill="#fff" />
                 </g>
                 <g data-location="SF">
                   <circle class="Pin-back" cx="94.5" cy="229.5" r="2.5" fill="#fff" fill-opacity="0.5" />
                   <circle class="Pin-front" cx="94.5" cy="229.5" r="2.5" fill="#fff" />
                 </g>
                 <g data-location="AM">
                   <circle class="Pin-back" cx="353" cy="190" r="2.5" fill="#fff" fill-opacity="0.5" />
                   <circle class="Pin-front" cx="353" cy="190" r="2.5" fill="#fff" />
                 </g>
                 <g data-location="LN">
                   <circle class="Pin-back" cx="317" cy="186" r="2.5" fill="#fff" fill-opacity="0.5" />
                   <circle class="Pin-front" cx="317" cy="186" r="2.5" fill="#fff" />
                 </g>
                 <g data-location="FR">
                   <circle class="Pin-back" cx="364" cy="200" r="2.5" fill="#fff" fill-opacity="0.5" />
                   <circle class="Pin-front" cx="364" cy="200" r="2.5" fill="#fff" />
                 </g>
                 <g data-location="SP">
                   <circle class="Pin-back" cx="515" cy="301" r="2.5" fill="#fff" fill-opacity="0.5" />
                   <circle class="Pin-front" cx="515" cy="301" r="2.5" fill="#fff" />
                 </g>
                 <g data-location="BLR">
                   <circle class="Pin-back" cx="474" cy="277" r="2.5" fill="#fff" fill-opacity="0.5" />
                   <circle class="Pin-front" cx="474" cy="277" r="2.5" fill="#fff" />
                 </g>
               </g>
             </svg>
           </div>
         </div>
       </div>
       <div class="col col-md-7 col-sm-12 p-2">
         <div class="chartt h-100 w-100 align-content-center bg-1">
           <h2 class="wht ms-4">Branches-profits</h2>
           <table class=" table table-dark table-bordered table-hover h-75">
             <thead class="thead-dark">
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">First</th>
                 <th scope="col">Country</th>
                 <th scope="col">Handle</th>
                 <th scope="col">Profits</th>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <th scope="row">1</th>
                 <td>Mark</td>
                 <td>U.s</td>
                 <td>@mdo</td>
                 <td class="text-success fw-bolder">+45</td>
               </tr>
               <tr>
                 <th scope="row">2</th>
                 <td>Jacob</td>
                 <td>Pak</td>
                 <td>@fat</td>
                 <td class="text-success fw-bolder">+14</td>
               </tr>
               <tr>
                 <th scope="row">3</th>
                 <td>Larry</td>
                 <td>IRAN</td>
                 <td>@twitter</td>
                 <td class="text-success fw-bolder">+25</td>
               </tr>
                <tr>
                 <th scope="row">4</th>
                 <td>Rohit</td>
                 <td>Denmark</td>
                 <td>@twitter</td>
                 <td class="text-danger fw-bolder">-15</td>
               </tr>
               <tr>
                 <th scope="row">5</th>
                 <td>Larry</td>
                 <td>U.s</td>
                 <td>@Ista</td>
                 <td class="text-success fw-bolder">+32</td>
               </tr>
               <tr>
                 <th scope="row">6</th>
                 <td>Jay</td>
                 <td>India</td>
                 <td>@Youtube</td>
                 <td class="text-danger fw-bolder">-72</td>
               </tr>
               <tr>
                 <th scope="row">7</th>
                 <td>Kelly</td>
                 <td>Chine</td>
                 <td>@Whatsapp</td>
                 <td class="text-danger fw-bolder">-52</td>
               </tr>
               <tr>
                 <th scope="row">8</th>
                 <td>Miroliz</td>
                 <td>Iceland</td>
                 <td>@twitter</td>
                 <td class="text-success fw-bolder">+22</td>
               </tr>
               <tr>
                 <th scope="row">9</th>
                 <td>Herrlian</td>
                 <td>Ruse</td>
                 <td>@Mdo</td>
                 <td class="text-danger fw-bolder">+12</td>
               </tr>

             </tbody>
           </table>
         </div>
       </div>
     </div>
     <div class="p2-charts row w-100 mt-4">
       <div class="col col-md-4 col-sm-12 p-2">
         <div class="chartt h-100 w-100 pt-4 bg-1 d-flex align-items-center justify-content-center">
           <article class="skills">
             <div class="t-6 skl">
                 <p>PRODUCTS<span></span><span class="skills"></span></p>
             </div>
             <div class="t-6 skl">
                 <p>SALES<span></span><span class="skills"></span></p>
             </div>

             <div class="t-6 skl">
                 <p>PRODUCESy<span></span><span class="skills"></span></p>
             </div>
             <div class="t-6 skl">
                 <p>MARKET STATE<span></span><span class="skills"></span></p>
             </div>

             <div class="t-6 skl">
                 <p>E_COM><span></span><span class="skills"></span></p>
             </div>
             <div class="t-6 skl">
                 <p>INTERNATIONAL<span></span><span class="skills"></span></p>
             </div>

             <div class="t-6 skl">
                 <p>GAINS<span></span><span class="skills"></span></p>
             </div>
             <div class="t-6 skl">
                 <p>LOSSES<span></span><span class="skills"></span></p>
             </div>
         </article>
         </div>
       </div>
       <div class="col col-md-8 col-sm-12 p-2">
         <div class="chartt h-100 w-100 align-content-center">
           <section class="msger h-100 w-100">
             <header class="msger-header">
               <div class="msger-header-title">
                 <i class="fas fa-comment-alt"></i> NK PVT LTD
               </div>
               <div class="msger-header-options">
                 <span><i class="fas fa-cog"></i></span>
               </div>
             </header>

             <main class="msger-chat">
               <div class="msg left-msg">
                 <div
                  class="msg-img"
                  style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"
                 ></div>

                 <div class="msg-bubble">
                   <div class="msg-info">
                     <div class="msg-info-name">RENLIN</div>
                     <div class="msg-info-time">12:45</div>
                   </div>

                   <div class="msg-text">
                     Hi, i want to deal with you about our company.
                   </div>
                 </div>
               </div>

               <div class="msg right-msg">
                 <div
                  class="msg-img"
                  style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"
                 ></div>

                 <div class="msg-bubble">
                   <div class="msg-info">
                     <div class="msg-info-name">Sajad</div>
                     <div class="msg-info-time">12:46</div>
                   </div>

                   <div class="msg-text">
                     Sure! just call me and talk about that.
                   </div>
                 </div>
               </div>
             </main>

             <form class="msger-inputarea">
               <input type="text" class="msger-input" placeholder="Enter your message...">
               <button type="submit" class="msger-send-btn">Send</button>
             </form>
           </section>


         </div>
       </div>
     </div>

   </div>


   <div class="page-1 overflow-scroll tab-pane fade px-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
     <div class="profile-containerr m-auto mt-4 position-relative">
         <div class="prof-heading w-100">
           <h2 class="wht fw-bolder">Profile</h2>
         </div>
         <div class="profile-m-cont w-100 " style="height: 60vh;">
             <div class="prof-back h-50 w-100  position-relative">
                     <img src="https://demo.tailadmin.com/src/images/cover/cover-01.png" alt="" class="img-fluid h-100 w-100">
                     <button class="btn btn-primary btn-sm position-absolute edit"><i class="fas fa-camera"></i> Edit</button>
             </div>
             <img src="https://demo.tailadmin.com/src/images/user/user-06.png" alt="" class="img-fluid rounded-cicrle prof-pic position-absolute translate-middle start-50">
             <div class="prof-front w-100 pb-4  bg-1 d-flex flex-column align-items-center justify-content-end" style="min-height: 50%;">
               <h2 class="wht">SAZAL ABDULLAH </h2>
               <span style="color: gray;">Web Developer</span>
             </div>
         </div>
         <div class="profile-down w-100 d-flex flex-column align-items-center justify-content-center gap-3 bg-1" style="min-height: 60vh;">
             <div class="social-info d-flex align-items-center justify-content-around mx-auto rounded-2">
                 <span class="text-light h-100 fw-bold text-center align-content-center" style="font-size: 22px;width: 30%;"> 259<span style="color: gray;font-size: 15px;" class="text-break"> Posts</span></span>
                 <span class="text-light h-100 fw-bold text-center align-content-center" style="font-size: 22px;width: 30%;"> 205<span style="color: gray;font-size: 15px;" class="text-break"> Followers</span></span>
                 <span class="text-light h-100 fw-bold text-center align-content-center" style="font-size: 22px;width: 30%;"> 125<span style="color: gray;font-size: 15px;" class="text-break"> Following</span></span>
             </div>
             <h3 class="text-light">About Me</h3>
             <p class="w-75 text-center" style="color: gray;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque posuere fermentum urna, eu condimentum mauris tempus ut. Donec fermentum blandit aliquet. Etiam dictum dapibus ultricies. Sed vel aliquet libero. Nunc a augue fermentum, pharetra ligula sed, aliquam lacus.</p>
             <h3 class="text-light">Follow me on</h3>
             <div class="social-icons w-25 d-flex align-items-center justify-content-around">
               <i class="fab fa-instagram"></i>
               <i class="fab fa-twitter"></i>
               <i class="fab fa-youtube"></i>
               <i class="fas fa-basketball-ball"></i>
               <i class="fab fa-github-square"></i>
             </div>
         </div>
     </div>
    </div>
</div>


@endsection
