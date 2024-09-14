<?php
 include "config/koneksi_li.php";
 ?>
<?php
if ($_GET['module']=='iplt'){ 
?>
<script>
 $(document).ready(function(){

    function load_datakab(tahun,kodekota){
        $('.tabel-data1').DataTable({
            "columnDefs": [
        { orderable: true, className: 'reorder', targets: 0 },
        { orderable: false, targets: '_all' }
    ],
    responsive: true,
        responsive: {
          details: true
        },
        "processing": true,
        "serverSide": true,
        "ajax":{
        url :"serverside/get_dataiplthome.php", // json datasource
         type: 'POST',
         data: { tahun:tahun,kodekota:kodekota }
        
         }
      });
    }
    $('#tahun').on('change', function(){
      var kodekota=document.getElementById("kodekota").value;
      var tahun=document.getElementById("tahun").value;
    /* alert(options); */
    $('.tabel-data1').DataTable().destroy();
    if(tahun != '' && kodekota != '') {
      load_datakab(tahun,kodekota);
    }else{
      load_datakab();
    }
})

 })   
</script>
<script>
  $(document).ready(function() {
        
$('.tabel-data1').DataTable({
  "columnDefs": [
        { orderable: true, className: 'reorder', targets: 0 },
        { orderable: false, targets: '_all' }
    ],
    responsive: true,
        responsive: {
          details: true
        },
  "processing": true,
"serverSide": true,
"ajax":{
    url :"serverside/get_dataiplthome.php", // json datasource
     type: 'POST',
    
}

});

      });
</script> 
<?php
}elseif($_GET['module']=='spald'){ 
    ?>
    <script>
     $(document).ready(function(){
    
        function load_datakab(tahun,kodekota){
            $('.tabel-data1').DataTable({
                "columnDefs": [
            { orderable: true, className: 'reorder', targets: 0 },
            { orderable: false, targets: '_all' }
        ],
        responsive: true,
            responsive: {
              details: true
            },
            "processing": true,
            "serverSide": true,
            "ajax":{
            url :"serverside/get_dataspaldhome.php", // json datasource
             type: 'POST',
             data: { tahun:tahun,kodekota:kodekota }
            
             }
          });
        }
        $('#tahun').on('change', function(){
          var kodekota=document.getElementById("kodekota").value;
          var tahun=document.getElementById("tahun").value;
        /* alert(options); */
        $('.tabel-data1').DataTable().destroy();
        if(tahun != '' && kodekota != '') {
          load_datakab(tahun,kodekota);
        }else{
          load_datakab();
        }
    })
    
     })   
    </script>
    <script>
      $(document).ready(function() {
            
    $('.tabel-data1').DataTable({
      "columnDefs": [
            { orderable: true, className: 'reorder', targets: 0 },
            { orderable: false, targets: '_all' }
        ],
        responsive: true,
            responsive: {
              details: true
            },
      "processing": true,
    "serverSide": true,
    "ajax":{
        url :"serverside/get_dataspaldhome.php", // json datasource
         type: 'POST',
        
    }
    
    });
    
          });
    </script> 
    <?php
    }
    elseif($_GET['module']=='kelembagaanairlimbah'){ 
        ?>
        <script>
         $(document).ready(function(){
        
            function load_datakab(tahun,kodekota){
                $('.tabel-data1').DataTable({
                    "columnDefs": [
                { orderable: true, className: 'reorder', targets: 0 },
                { orderable: false, targets: '_all' }
            ],
            responsive: true,
                responsive: {
                  details: true
                },
                "processing": true,
                "serverSide": true,
                "ajax":{
                url :"serverside/get_datalembagaairlimbah.php", // json datasource
                 type: 'POST',
                 data: { tahun:tahun,kodekota:kodekota }
                
                 }
              });
            }
            $('#tahun').on('change', function(){
              var kodekota=document.getElementById("kodekota").value;
              var tahun=document.getElementById("tahun").value;
            /* alert(options); */
            $('.tabel-data1').DataTable().destroy();
            if(tahun != '' && kodekota != '') {
              load_datakab(tahun,kodekota);
            }else{
              load_datakab();
            }
        })
        
         })   
        </script>
        <script>
          $(document).ready(function() {
                
        $('.tabel-data1').DataTable({
          "columnDefs": [
                { orderable: true, className: 'reorder', targets: 0 },
                { orderable: false, targets: '_all' }
            ],
            responsive: true,
                responsive: {
                  details: true
                },
          "processing": true,
        "serverSide": true,
        "ajax":{
            url :"serverside/get_datalembagaairlimbah.php", // json datasource
             type: 'POST',
            
        }
        
        });
        
              });
        </script> 
        <?php
        }
        elseif($_GET['module']=='spamkab'){ 
          ?>
          <script>
           $(document).ready(function(){
          
              function load_datakab(tahun,kodekota){
                  $('.tabel-data1').DataTable({
                      "columnDefs": [
                  { orderable: true, className: 'reorder', targets: 0 },
                  { orderable: false, targets: '_all' }
              ],
              responsive: true,
                  responsive: {
                    details: true
                  },
                  "processing": true,
                  "serverSide": true,
                  "ajax":{
                  url :"serverside/get_dataspamkab.php", // json datasource
                   type: 'POST',
                   data: { tahun:tahun,kodekota:kodekota }
                  
                   }
                });
              }
              $('#tahun').on('change', function(){
                var kodekota=document.getElementById("kodekota").value;
                var tahun=document.getElementById("tahun").value;
              /* alert(options); */
              $('.tabel-data1').DataTable().destroy();
              if(tahun != '' && kodekota != '') {
                load_datakab(tahun,kodekota);
              }else{
                load_datakab();
              }
          })
          
           })   
          </script>
          <script>
            $(document).ready(function() {
                  
          $('.tabel-data1').DataTable({
            "columnDefs": [
                  { orderable: true, className: 'reorder', targets: 0 },
                  { orderable: false, targets: '_all' }
              ],
              responsive: true,
                  responsive: {
                    details: true
                  },
            "processing": true,
          "serverSide": true,
          "ajax":{
              url :"serverside/get_dataspamkab.php", // json datasource
               type: 'POST',
              
          }
          
          });
          
                });
          </script> 
          <?php
          }
          elseif($_GET['module']=='spamreg'){ 
            ?>
            <script>
             $(document).ready(function(){
            
                function load_datakab(tahun,kodekota){
                    $('.tabel-data1').DataTable({
                        "columnDefs": [
                    { orderable: true, className: 'reorder', targets: 0 },
                    { orderable: false, targets: '_all' }
                ],
                responsive: true,
                    responsive: {
                      details: true
                    },
                    "processing": true,
                    "serverSide": true,
                    "ajax":{
                    url :"serverside/get_dataspamreg.php", // json datasource
                     type: 'POST',
                     data: { tahun:tahun,kodekota:kodekota }
                    
                     }
                  });
                }
                $('#tahun').on('change', function(){
                  var kodekota=document.getElementById("kodekota").value;
                  var tahun=document.getElementById("tahun").value;
                /* alert(options); */
                $('.tabel-data1').DataTable().destroy();
                if(tahun != '' && kodekota != '') {
                  load_datakab(tahun,kodekota);
                }else{
                  load_datakab();
                }
            })
            
             })   
            </script>
            <script>
              $(document).ready(function() {
                    
            $('.tabel-data1').DataTable({
              "columnDefs": [
                    { orderable: true, className: 'reorder', targets: 0 },
                    { orderable: false, targets: '_all' }
                ],
                responsive: true,
                    responsive: {
                      details: true
                    },
              "processing": true,
            "serverSide": true,
            "ajax":{
                url :"serverside/get_dataspamreg.php", // json datasource
                 type: 'POST',
                
            }
            
            });
            
                  });
            </script> 
            <?php
            }
            elseif($_GET['module']=='spamikk'){ 
              ?>
              <script>
               $(document).ready(function(){
              
                  function load_datakab(tahun,kodekota){
                      $('.tabel-data1').DataTable({
                          "columnDefs": [
                      { orderable: true, className: 'reorder', targets: 0 },
                      { orderable: false, targets: '_all' }
                  ],
                  responsive: true,
                      responsive: {
                        details: true
                      },
                      "processing": true,
                      "serverSide": true,
                      "ajax":{
                      url :"serverside/get_dataspamikk.php", // json datasource
                       type: 'POST',
                       data: { tahun:tahun,kodekota:kodekota }
                      
                       }
                    });
                  }
                  $('#tahun').on('change', function(){
                    var kodekota=document.getElementById("kodekota").value;
                    var tahun=document.getElementById("tahun").value;
                  /* alert(options); */
                  $('.tabel-data1').DataTable().destroy();
                  if(tahun != '' && kodekota != '') {
                    load_datakab(tahun,kodekota);
                  }else{
                    load_datakab();
                  }
              })
              
               })   
              </script>
              <script>
                $(document).ready(function() {
                      
              $('.tabel-data1').DataTable({
                "columnDefs": [
                      { orderable: true, className: 'reorder', targets: 0 },
                      { orderable: false, targets: '_all' }
                  ],
                  responsive: true,
                      responsive: {
                        details: true
                      },
                "processing": true,
              "serverSide": true,
              "ajax":{
                  url :"serverside/get_dataspamikk.php", // json datasource
                   type: 'POST',
                  
              }
              
              });
              
                    });
              </script> 
              <?php
              }
              elseif($_GET['module']=='spamdesa'){ 
                ?>
                <script>
                 $(document).ready(function(){
                
                    function load_datakab(tahun,kodekota){
                        $('.tabel-data1').DataTable({
                            "columnDefs": [
                        { orderable: true, className: 'reorder', targets: 0 },
                        { orderable: false, targets: '_all' }
                    ],
                    responsive: true,
                        responsive: {
                          details: true
                        },
                        "processing": true,
                        "serverSide": true,
                        "ajax":{
                        url :"serverside/get_dataspamdesa.php", // json datasource
                         type: 'POST',
                         data: { tahun:tahun,kodekota:kodekota }
                        
                         }
                      });
                    }
                    $('#tahun').on('change', function(){
                      var kodekota=document.getElementById("kodekota").value;
                      var tahun=document.getElementById("tahun").value;
                    /* alert(options); */
                    $('.tabel-data1').DataTable().destroy();
                    if(tahun != '' && kodekota != '') {
                      load_datakab(tahun,kodekota);
                    }else{
                      load_datakab();
                    }
                })
                
                 })   
                </script>
                <script>
                  $(document).ready(function() {
                        
                $('.tabel-data1').DataTable({
                  "columnDefs": [
                        { orderable: true, className: 'reorder', targets: 0 },
                        { orderable: false, targets: '_all' }
                    ],
                    responsive: true,
                        responsive: {
                          details: true
                        },
                  "processing": true,
                "serverSide": true,
                "ajax":{
                    url :"serverside/get_dataspamdesa.php", // json datasource
                     type: 'POST',
                    
                }
                
                });
                
                      });
                </script> 
                <?php
                }elseif($_GET['module']=='rawanair'){ 
                  ?>
                  <script>
                   $(document).ready(function(){
                  
                      function load_datakab(tahun,kodekota){
                          $('.tabel-data1').DataTable({
                              "columnDefs": [
                          { orderable: true, className: 'reorder', targets: 0 },
                          { orderable: false, targets: '_all' }
                      ],
                      responsive: true,
                          responsive: {
                            details: true
                          },
                          "processing": true,
                          "serverSide": true,
                          "ajax":{
                          url :"serverside/get_datarawanair.php", // json datasource
                           type: 'POST',
                           data: { tahun:tahun,kodekota:kodekota }
                          
                           }
                        });
                      }
                      $('#tahun').on('change', function(){
                        var kodekota=document.getElementById("kodekota").value;
                        var tahun=document.getElementById("tahun").value;
                      /* alert(options); */
                      $('.tabel-data1').DataTable().destroy();
                      if(tahun != '' && kodekota != '') {
                        load_datakab(tahun,kodekota);
                      }else{
                        load_datakab();
                      }
                  })
                  
                   })   
                  </script>
                  <script>
                    $(document).ready(function() {
                          
                  $('.tabel-data1').DataTable({
                    "columnDefs": [
                          { orderable: true, className: 'reorder', targets: 0 },
                          { orderable: false, targets: '_all' }
                      ],
                      responsive: true,
                          responsive: {
                            details: true
                          },
                    "processing": true,
                  "serverSide": true,
                  "ajax":{
                      url :"serverside/get_datarawanair.php", // json datasource
                       type: 'POST',
                      
                  }
                  
                  });
                  
                        });
                  </script> 
                  <?php
                  }
                  elseif($_GET['module']=='airbaku'){ 
                    ?>
                    <script>
                     $(document).ready(function(){
                    
                        function load_datakab(tahun,kodekota){
                            $('.tabel-data1').DataTable({
                                "columnDefs": [
                            { orderable: true, className: 'reorder', targets: 0 },
                            { orderable: false, targets: '_all' }
                        ],
                        responsive: true,
                            responsive: {
                              details: true
                            },
                            "processing": true,
                            "serverSide": true,
                            "ajax":{
                            url :"serverside/get_dataairbaku.php", // json datasource
                             type: 'POST',
                             data: { tahun:tahun,kodekota:kodekota }
                            
                             }
                          });
                        }
                        $('#tahun').on('change', function(){
                          var kodekota=document.getElementById("kodekota").value;
                          var tahun=document.getElementById("tahun").value;
                        /* alert(options); */
                        $('.tabel-data1').DataTable().destroy();
                        if(tahun != '' && kodekota != '') {
                          load_datakab(tahun,kodekota);
                        }else{
                          load_datakab();
                        }
                    })
                    
                     })   
                    </script>
                    <script>
                      $(document).ready(function() {
                            
                    $('.tabel-data1').DataTable({
                      "columnDefs": [
                            { orderable: true, className: 'reorder', targets: 0 },
                            { orderable: false, targets: '_all' }
                        ],
                        responsive: true,
                            responsive: {
                              details: true
                            },
                      "processing": true,
                    "serverSide": true,
                    "ajax":{
                        url :"serverside/get_dataairbaku.php", // json datasource
                         type: 'POST',
                        
                    }
                    
                    });
                    
                          });
                    </script> 
                    <?php
                    }
                    elseif($_GET['module']=='kelembagaanairminum'){ 
                      ?>
                      <script>
                       $(document).ready(function(){
                      
                          function load_datakab(tahun,kodekota){
                              $('.tabel-data1').DataTable({
                                  "columnDefs": [
                              { orderable: true, className: 'reorder', targets: 0 },
                              { orderable: false, targets: '_all' }
                          ],
                          responsive: true,
                              responsive: {
                                details: true
                              },
                              "processing": true,
                              "serverSide": true,
                              "ajax":{
                              url :"serverside/get_datakelembagaanairminum.php", // json datasource
                               type: 'POST',
                               data: { tahun:tahun,kodekota:kodekota }
                              
                               }
                            });
                          }
                          $('#tahun').on('change', function(){
                            var kodekota=document.getElementById("kodekota").value;
                            var tahun=document.getElementById("tahun").value;
                          /* alert(options); */
                          $('.tabel-data1').DataTable().destroy();
                          if(tahun != '' && kodekota != '') {
                            load_datakab(tahun,kodekota);
                          }else{
                            load_datakab();
                          }
                      })
                      
                       })   
                      </script>
                      <script>
                        $(document).ready(function() {
                              
                      $('.tabel-data1').DataTable({
                        "columnDefs": [
                              { orderable: true, className: 'reorder', targets: 0 },
                              { orderable: false, targets: '_all' }
                          ],
                          responsive: true,
                              responsive: {
                                details: true
                              },
                        "processing": true,
                      "serverSide": true,
                      "ajax":{
                          url :"serverside/get_datakelembagaanairminum.php", // json datasource
                           type: 'POST',
                          
                      }
                      
                      });
                      
                            });
                      </script> 
                      <?php
                      }
                      elseif($_GET['module']=='tps'){ 
                        ?>
                        <script>
                         $(document).ready(function(){
                        
                            function load_datakab(tahun,kodekota){
                                $('.tabel-data1').DataTable({
                                    "columnDefs": [
                                { orderable: true, className: 'reorder', targets: 0 },
                                { orderable: false, targets: '_all' }
                            ],
                            responsive: true,
                                responsive: {
                                  details: true
                                },
                                "processing": true,
                                "serverSide": true,
                                "ajax":{
                                url :"serverside/get_datatps.php", // json datasource
                                 type: 'POST',
                                 data: { tahun:tahun,kodekota:kodekota }
                                
                                 }
                              });
                            }
                            $('#tahun').on('change', function(){
                              var kodekota=document.getElementById("kodekota").value;
                              var tahun=document.getElementById("tahun").value;
                            /* alert(options); */
                            $('.tabel-data1').DataTable().destroy();
                            if(tahun != '' && kodekota != '') {
                              load_datakab(tahun,kodekota);
                            }else{
                              load_datakab();
                            }
                        })
                        
                         })   
                        </script>
                        <script>
                          $(document).ready(function() {
                                
                        $('.tabel-data1').DataTable({
                          "columnDefs": [
                                { orderable: true, className: 'reorder', targets: 0 },
                                { orderable: false, targets: '_all' }
                            ],
                            responsive: true,
                                responsive: {
                                  details: true
                                },
                          "processing": true,
                        "serverSide": true,
                        "ajax":{
                            url :"serverside/get_datatps.php", // json datasource
                             type: 'POST',
                            
                        }
                        
                        });
                        
                              });
                        </script> 
                        <?php
                        }
                        elseif($_GET['module']=='tpst'){ 
                          ?>
                          <script>
                           $(document).ready(function(){
                          
                              function load_datakab(tahun,kodekota){
                                  $('.tabel-data1').DataTable({
                                      "columnDefs": [
                                  { orderable: true, className: 'reorder', targets: 0 },
                                  { orderable: false, targets: '_all' }
                              ],
                              responsive: true,
                                  responsive: {
                                    details: true
                                  },
                                  "processing": true,
                                  "serverSide": true,
                                  "ajax":{
                                  url :"serverside/get_datatpst.php", // json datasource
                                   type: 'POST',
                                   data: { tahun:tahun,kodekota:kodekota }
                                  
                                   }
                                });
                              }
                              $('#tahun').on('change', function(){
                                var kodekota=document.getElementById("kodekota").value;
                                var tahun=document.getElementById("tahun").value;
                              /* alert(options); */
                              $('.tabel-data1').DataTable().destroy();
                              if(tahun != '' && kodekota != '') {
                                load_datakab(tahun,kodekota);
                              }else{
                                load_datakab();
                              }
                          })
                          
                           })   
                          </script>
                          <script>
                            $(document).ready(function() {
                                  
                          $('.tabel-data1').DataTable({
                            "columnDefs": [
                                  { orderable: true, className: 'reorder', targets: 0 },
                                  { orderable: false, targets: '_all' }
                              ],
                              responsive: true,
                                  responsive: {
                                    details: true
                                  },
                            "processing": true,
                          "serverSide": true,
                          "ajax":{
                              url :"serverside/get_datatpst.php", // json datasource
                               type: 'POST',
                              
                          }
                          
                          });
                          
                                });
                          </script> 
                          <?php
                          }
                          elseif($_GET['module']=='tpa'){ 
                            ?>
                            <script>
                             $(document).ready(function(){
                            
                                function load_datakab(tahun,kodekota){
                                    $('.tabel-data1').DataTable({
                                        "columnDefs": [
                                    { orderable: true, className: 'reorder', targets: 0 },
                                    { orderable: false, targets: '_all' }
                                ],
                                responsive: true,
                                    responsive: {
                                      details: true
                                    },
                                    "processing": true,
                                    "serverSide": true,
                                    "ajax":{
                                    url :"serverside/get_datatpa.php", // json datasource
                                     type: 'POST',
                                     data: { tahun:tahun,kodekota:kodekota }
                                    
                                     }
                                  });
                                }
                                $('#tahun').on('change', function(){
                                  var kodekota=document.getElementById("kodekota").value;
                                  var tahun=document.getElementById("tahun").value;
                                /* alert(options); */
                                $('.tabel-data1').DataTable().destroy();
                                if(tahun != '' && kodekota != '') {
                                  load_datakab(tahun,kodekota);
                                }else{
                                  load_datakab();
                                }
                            })
                            
                             })   
                            </script>
                            <script>
                              $(document).ready(function() {
                                    
                            $('.tabel-data1').DataTable({
                              "columnDefs": [
                                    { orderable: true, className: 'reorder', targets: 0 },
                                    { orderable: false, targets: '_all' }
                                ],
                                responsive: true,
                                    responsive: {
                                      details: true
                                    },
                              "processing": true,
                            "serverSide": true,
                            "ajax":{
                                url :"serverside/get_datatpa.php", // json datasource
                                 type: 'POST',
                                
                            }
                            
                            });
                            
                                  });
                            </script> 
                            <?php
                            }
                            elseif($_GET['module']=='kelembagaansampah'){ 
                              ?>
                              <script>
                               $(document).ready(function(){
                              
                                  function load_datakab(tahun,kodekota){
                                      $('.tabel-data1').DataTable({
                                          "columnDefs": [
                                      { orderable: true, className: 'reorder', targets: 0 },
                                      { orderable: false, targets: '_all' }
                                  ],
                                  responsive: true,
                                      responsive: {
                                        details: true
                                      },
                                      "processing": true,
                                      "serverSide": true,
                                      "ajax":{
                                      url :"serverside/get_datakelembagaansampah.php", // json datasource
                                       type: 'POST',
                                       data: { tahun:tahun,kodekota:kodekota }
                                      
                                       }
                                    });
                                  }
                                  $('#tahun').on('change', function(){
                                    var kodekota=document.getElementById("kodekota").value;
                                    var tahun=document.getElementById("tahun").value;
                                  /* alert(options); */
                                  $('.tabel-data1').DataTable().destroy();
                                  if(tahun != '' && kodekota != '') {
                                    load_datakab(tahun,kodekota);
                                  }else{
                                    load_datakab();
                                  }
                              })
                              
                               })   
                              </script>
                              <script>
                                $(document).ready(function() {
                                      
                              $('.tabel-data1').DataTable({
                                "columnDefs": [
                                      { orderable: true, className: 'reorder', targets: 0 },
                                      { orderable: false, targets: '_all' }
                                  ],
                                  responsive: true,
                                      responsive: {
                                        details: true
                                      },
                                "processing": true,
                              "serverSide": true,
                              "ajax":{
                                  url :"serverside/get_datakelembagaansampah.php", // json datasource
                                   type: 'POST',
                                  
                              }
                              
                              });
                              
                                    });
                              </script> 
<?php
}
elseif($_GET['module']=='kumuhdiatas10ha'){ 
?>
<script>
$(document).ready(function(){                                
function load_datakab(tahun,kodekota){
$('.tabel-data1').DataTable({
"columnDefs": [
{ orderable: true, className: 'reorder', targets: 0 },
{ orderable: false, targets: '_all' }
],
responsive: true,
responsive: {
details: true
},
"processing": true,
"serverSide": true,
"ajax":{
url :"serverside/get_datakumuhdiatas10ha.php", // json datasource
type: 'POST',
data: { tahun:tahun,kodekota:kodekota }
                                
}
});
}
$('#tahun').on('change', function(){
var kodekota=document.getElementById("kodekota").value;
var tahun=document.getElementById("tahun").value;
/* alert(options); */
$('.tabel-data1').DataTable().destroy();
if(tahun != '' && kodekota != '') {
load_datakab(tahun,kodekota);
}else{
load_datakab();
}
})       
})   
</script>
<script>
$(document).ready(function() {      
$('.tabel-data1').DataTable({
"columnDefs": [
{ orderable: true, className: 'reorder', targets: 0 },
{ orderable: false, targets: '_all' }
],
responsive: true,
responsive: {
details: true
},
"processing": true,
"serverSide": true,
"ajax":{
url :"serverside/get_datakumuhdiatas10ha.php", // json datasource
type: 'POST',
}                                
}); 
});
</script> 
<?php
}
elseif($_GET['module']=='kumuhdibawah10ha'){ 
  ?>
  <script>
  $(document).ready(function(){                                
  function load_datakab(tahun,kodekota){
  $('.tabel-data1').DataTable({
  "columnDefs": [
  { orderable: true, className: 'reorder', targets: 0 },
  { orderable: false, targets: '_all' }
  ],
  responsive: true,
  responsive: {
  details: true
  },
  "processing": true,
  "serverSide": true,
  "ajax":{
  url :"serverside/get_datakumuhdibawah10ha.php", // json datasource
  type: 'POST',
  data: { tahun:tahun,kodekota:kodekota }
                                  
  }
  });
  }
  $('#tahun').on('change', function(){
  var kodekota=document.getElementById("kodekota").value;
  var tahun=document.getElementById("tahun").value;
  /* alert(options); */
  $('.tabel-data1').DataTable().destroy();
  if(tahun != '' && kodekota != '') {
  load_datakab(tahun,kodekota);
  }else{
  load_datakab();
  }
  })       
  })   
  </script>
  <script>
  $(document).ready(function() {      
  $('.tabel-data1').DataTable({
  "columnDefs": [
  { orderable: true, className: 'reorder', targets: 0 },
  { orderable: false, targets: '_all' }
  ],
  responsive: true,
  responsive: {
  details: true
  },
  "processing": true,
  "serverSide": true,
  "ajax":{
  url :"serverside/get_datakumuhdibawah10ha.php", // json datasource
  type: 'POST',
  }                                
  }); 
  });
  </script> 
  <?php
  }
  elseif($_GET['module']=='perumahan'){ 
    ?>
    <script>
    $(document).ready(function(){                                
    function load_datakab(tahun,kodekota){
    $('.tabel-data1').DataTable({
    "columnDefs": [
    { orderable: true, className: 'reorder', targets: 0 },
    { orderable: false, targets: '_all' }
    ],
    responsive: true,
    responsive: {
    details: true
    },
    "processing": true,
    "serverSide": true,
    "ajax":{
    url :"serverside/get_dataperumahan.php", // json datasource
    type: 'POST',
    data: { tahun:tahun,kodekota:kodekota }
                                    
    }
    });
    }
    $('#tahun').on('change', function(){
    var kodekota=document.getElementById("kodekota").value;
    var tahun=document.getElementById("tahun").value;
    /* alert(options); */
    $('.tabel-data1').DataTable().destroy();
    if(tahun != '' && kodekota != '') {
    load_datakab(tahun,kodekota);
    }else{
    load_datakab();
    }
    })       
    })   
    </script>
    <script>
    $(document).ready(function() {      
    $('.tabel-data1').DataTable({
    "columnDefs": [
    { orderable: true, className: 'reorder', targets: 0 },
    { orderable: false, targets: '_all' }
    ],
    responsive: true,
    responsive: {
    details: true
    },
    "processing": true,
    "serverSide": true,
    "ajax":{
    url :"serverside/get_dataperumahan.php", // json datasource
    type: 'POST',
    }                                
    }); 
    });
    </script> 
    <?php
    }elseif($_GET['module']=='rtlh'){ 
      ?>
      <script>
      $(document).ready(function(){                                
      function load_datakab(tahun,kodekota){
      $('.tabel-data1').DataTable({
      "columnDefs": [
      { orderable: true, className: 'reorder', targets: 0 },
      { orderable: false, targets: '_all' }
      ],
      responsive: true,
      responsive: {
      details: true
      },
      "processing": true,
      "serverSide": true,
      "ajax":{
      url :"serverside/get_datartlh.php", // json datasource
      type: 'POST',
      data: { tahun:tahun,kodekota:kodekota }
                                      
      }
      });
      }
      $('#tahun').on('change', function(){
      var kodekota=document.getElementById("kodekota").value;
      var tahun=document.getElementById("tahun").value;
      /* alert(options); */
      $('.tabel-data1').DataTable().destroy();
      if(tahun != '' && kodekota != '') {
      load_datakab(tahun,kodekota);
      }else{
      load_datakab();
      }
      })       
      })   
      </script>
      <script>
      $(document).ready(function() {      
      $('.tabel-data1').DataTable({
      "columnDefs": [
      { orderable: true, className: 'reorder', targets: 0 },
      { orderable: false, targets: '_all' }
      ],
      responsive: true,
      responsive: {
      details: true
      },
      "processing": true,
      "serverSide": true,
      "ajax":{
      url :"serverside/get_datartlh.php", // json datasource
      type: 'POST',
      }                                
      }); 
      });
      </script> 
      <?php
      }
      elseif($_GET['module']=='petasebaran'){
     ?>
     <script language="javascript">
$(document).ready(function() {
	$('#kodekota').change(function() { 
		var kode_kota = $("#kodekota").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_datakecamatan.php',
			data: 'kodekota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kodekec').html(response);
                
                
			}
		});
    })
});
</script>	
<script language="javascript">
$(document).ready(function() {
	$('#kodekec').change(function() { 
		var kode_kec = $("#kodekec").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_datakelurahan.php',
			data: 'kodekec=' + kode_kec, 
			dataType: 'html',
			success: function(response) {
				$('#kodekel').html(response);
                
                
			}
		});
    })
});
</script>
    
     <style type="text/css">
#map {
height: 600px;

}
</style>
     <script type="text/javascript">
 $(document).ready(function(){              
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("latitude").value = posisiTitik.lat();
    document.getElementById("longitude").value = posisiTitik.lng();
    
}

//* Fungsi untuk mendapatkan nilai latitude longitude
function updateMarkerPosition(latLng) {
document.getElementById('latitude').value = [latLng.lat()]
document.getElementById('longitude').value = [latLng.lng()]
}
 
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 8,
// Nilai 5.381281, 95.954826 adalah Nilai Latitude dan Longitude titik kordinat Kota Sigli
center: new google.maps.LatLng(-4.3744228,105.1939337),
mapTypeId: google.maps.MapTypeId.ROADMAP 
});
//posisi awal marker
var latLng = new google.maps.LatLng(-4.3744228,105.1939337);
 
/* buat marker yang bisa di drag lalu
panggil fungsi updateMarkerPosition(latLng)
dan letakan posisi terakhir di id=latitude dan id=longitude
*/
var marker = new google.maps.Marker({
position : latLng,
title : 'lokasi',
map : map,
draggable : true,
icon: 'marker.png'
});
 
updateMarkerPosition(latLng);
google.maps.event.addListener(marker, 'drag', function() {
// ketika marker di drag, otomatis nilai latitude dan longitude
//menyesuaikan dengan posisi marker
updateMarkerPosition(marker.getPosition());
});

google.maps.event.addListener(map, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });
 })
</script>

<script>
      $(document).ready(function(){                                
      $('#tahun').on('change', function(){
      var kodekota=document.getElementById("kodekota").value;
      var kodekec=document.getElementById("kodekec").value;
      var kodekel=document.getElementById("kodekel").value;
      var tahun=document.getElementById("tahun").value;
      
     
     
     
       var mapCanvas = document.getElementById('map');      
       // Center maps
       var myLatlng = new google.maps.LatLng(-4.3744228,105.1939337);
       // Map Options    
       var mapOptions = {
         zoom: 8,
         center: myLatlng
       };
       
       // Create the Map
       map = new google.maps.Map(mapCanvas, mapOptions);

       var infoWindow = new google.maps.InfoWindow;
      //var infowindow = new google.maps.InfoWindow();
       //request data from data-maps.php
       $.getJSON( "serverside/data-maps.php?tahun="+tahun+"&kodekota="+kodekota+"&kodekec="+kodekec+"&kodekel="+kodekel, function( data ) {
         //parsing data json 
         $.each( data, function( i, item ) {

           //set point marker
           var point = new google.maps.LatLng(
                       parseFloat(item.latitude),
                       parseFloat(item.longitude));

                       
            
var contentString = '<div id="content"><div id="siteNotice"></div><h3 id="firstHeading">'+item.nama_kk+'</h3><div id="bodyContent"><p><br><img src="foto_tempat/'+item.foto+'" width="200" height="150" style="float:left;margin:0 5px 0 0;"></p></div></div>';

var infowindow = new google.maps.InfoWindow({
  content: contentString,
  position: point,
  maxWidth: 400,

});

           //marker option
           var marker = new google.maps.Marker({
               map: map,
               animation: google.maps.Animation.DROP,
               position: point,
               icon: "marker.png"
           });

           marker.addListener('click', function() {
          // tampilkan info window di atas marker
          
          infowindow.open(map, marker);
        });

        /*   marker.addListener('click', function() {

            
              infoWindow.setContent(infowincontent);
              infoWindow.open(map, marker);
            });*/

           

         });
         
       });
       
      
      

      })       
      })   
      </script>
     <?php
      }
elseif($_GET['module']=='capaianlimbah'){
?>
 <script>
      $(document).ready(function(){                                
      $('#tahun').on('change', function(){
      var kodekota=document.getElementById("kodekota").value;
      var tahun=document.getElementById("tahun").value;
      /* alert(options); */
     
      if(tahun != '' && kodekota != ''){

        $.ajax({
			type: 'POST',
			url: 'serverside/get_datacapaianlimbah.php',
			data: 'tahun='+tahun+'&kode_kota='+kodekota, 
			success: function(response) {
				var json = response,
        obj = JSON.parse(json);
        document.getElementById("jumpenduduk").innerHTML = obj.jumpenduduk; 
        document.getElementById("jumpendudukdesa").innerHTML = obj.jumpendudukdesa; 
        document.getElementById("jumpendudukkota").innerHTML = obj.jumpendudukkota; 
        document.getElementById("targetaman").innerHTML = obj.targetaman; 
        document.getElementById("targetlayak").innerHTML = obj.targetlayak; 
        document.getElementById("targetbelumlayak").innerHTML = obj.targetbelumlayak; 
        document.getElementById("capaianaman").innerHTML = obj.capaianaman; 
        document.getElementById("capaianlayak").innerHTML = obj.capaianlayak; 
        document.getElementById("capaianblmlayak").innerHTML = obj.capaianblmlayak; 
        $('#kodekota1').val(obj.kodekota1); 
                  
                  
			}
		});
  }
      })       
      })   
      </script>
    

    <script type="text/javascript">
									$(document).ready(function(){
                    $('.tahun').on('change', function(){
                      var kodekota=document.getElementById("kodekota").value;
                       var tahun=document.getElementById("tahun").value;
											$.ajax({
												type :'post',
												url  :'serverside/get_datachart.php',
												data :'tahun='+tahun+'&kodekota='+kodekota,
												success : function(data){
									
												$('.hasil-map').html(data);//menampilkan data ke dalam modal
									
												}
											});
											
                    })
									});
									</script>


      
<?php
}elseif($_GET['module']=='capaianairminum'){
  ?>
   <script>
        $(document).ready(function(){                                
        $('#tahun').on('change', function(){
        var kodekota=document.getElementById("kodekota").value;
        var tahun=document.getElementById("tahun").value;
        /* alert(options); */
       
        if(tahun != '' && kodekota != ''){
  
          $.ajax({
        type: 'POST',
        url: 'serverside/get_datacapaianairminum.php',
        data: 'tahun='+tahun+'&kode_kota='+kodekota, 
        success: function(response) {
          var json = response,
          obj = JSON.parse(json);
          document.getElementById("jumpenduduk").innerHTML = obj.jumpenduduk; 
          document.getElementById("jumpendudukdesa").innerHTML = obj.jumpendudukdesa; 
          document.getElementById("jumpendudukkota").innerHTML = obj.jumpendudukkota; 
          document.getElementById("targetaman").innerHTML = obj.targetaman; 
          document.getElementById("targetlayak").innerHTML = obj.targetlayak; 
          document.getElementById("targetperpipaan").innerHTML = obj.targetperpipaan;
          document.getElementById("targetnonperpipaan").innerHTML = obj.targetnonperpipaan;  
          document.getElementById("capaianaman").innerHTML = obj.capaianaman; 
          document.getElementById("capaianlayak").innerHTML = obj.capaianlayak; 
          document.getElementById("capaianperpipaan").innerHTML = obj.capaianperpipaan; 
          document.getElementById("capaiannonperpipaan").innerHTML = obj.capaiannonperpipaan; 
          $('#kodekota1').val(obj.kodekota1); 
                    
                    
        }
      });
    }
        })       
        })   
        </script>
      
  
      <script type="text/javascript">
                    $(document).ready(function(){
                      $('.tahun').on('change', function(){
                        var kodekota=document.getElementById("kodekota").value;
                         var tahun=document.getElementById("tahun").value;
                        $.ajax({
                          type :'post',
                          url  :'serverside/get_datachart2.php',
                          data :'tahun='+tahun+'&kodekota='+kodekota,
                          success : function(data){
                    
                          $('.hasil-map').html(data);//menampilkan data ke dalam modal
                    
                          }
                        });
                        
                      })
                    });
                    </script>
  
  
        
  <?php
  }
  elseif($_GET['module']=='capaiansampah'){
    ?>
     <script>
          $(document).ready(function(){                                
          $('#tahun').on('change', function(){
          var kodekota=document.getElementById("kodekota").value;
          var tahun=document.getElementById("tahun").value;
          /* alert(options); */
         
          if(tahun != '' && kodekota != ''){
    
            $.ajax({
          type: 'POST',
          url: 'serverside/get_datacapaiansampah.php',
          data: 'tahun='+tahun+'&kode_kota='+kodekota, 
          success: function(response) {
            var json = response,
            obj = JSON.parse(json);
            document.getElementById("timbulsampah").innerHTML = obj.timbulsampah; 
            document.getElementById("penanganansampah").innerHTML = obj.penanganansampah; 
            document.getElementById("pengurangansampah").innerHTML = obj.pengurangansampah; 
            document.getElementById("targetpenanganan").innerHTML = obj.targetpenanganan; 
            document.getElementById("targetpengurangan").innerHTML = obj.targetpengurangan; 
            document.getElementById("capaianpenanganan").innerHTML = obj.capaianpenanganan; 
            document.getElementById("capaianpengurangan").innerHTML = obj.capaianpengurangan; 
            $('#kodekota1').val(obj.kodekota1); 
                      
                      
          }
        });
      }
          })       
          })   
          </script>
        
    
        <script type="text/javascript">
                      $(document).ready(function(){
                        $('.tahun').on('change', function(){
                          var kodekota=document.getElementById("kodekota").value;
                           var tahun=document.getElementById("tahun").value;
                          $.ajax({
                            type :'post',
                            url  :'serverside/get_datachart3.php',
                            data :'tahun='+tahun+'&kodekota='+kodekota,
                            success : function(data){
                      
                            $('.hasil-map').html(data);//menampilkan data ke dalam modal
                      
                            }
                          });
                          
                        })
                      });
                      </script>
    
    
          
    <?php
    }elseif($_GET['module']=='kategoridownload'){
    ?>
    <script>
      $(document).ready(function() {  

        var id_kategoridownload=document.getElementById("id_kategoridownload").value;
        
      $('.tabel-data1').DataTable({
      "columnDefs": [
      { orderable: true, className: 'reorder', targets: 0 },
      { orderable: false, targets: '_all' }
      ],
      responsive: true,
      responsive: {
      details: true
      },
      "processing": true,
      "serverSide": true,
      "ajax":{
      url :"serverside/get_datadownload.php", // json datasource
      type: 'POST',
      data: { id_kategoridownload:id_kategoridownload },
      }                                
      }); 
      });
      </script> 
    <?php
    }
    elseif($_GET['module']=='basisdata'){
   ?>
   <script language="javascript">
$(document).ready(function() {
	$('#kodekota').change(function() { 
		var kode_kota = $("#kodekota").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_datakecamatan.php',
			data: 'kodekota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kodekec').html(response);
                
                
			}
		});
    })
});
</script>	
<script language="javascript">
$(document).ready(function() {
	$('#kodekec').change(function() { 
		var kode_kec = $("#kodekec").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_datakelurahan.php',
			data: 'kodekec=' + kode_kec, 
			dataType: 'html',
			success: function(response) {
				$('#kodekel').html(response);
                
                
			}
		});
    })
});
</script>
<script type="text/javascript">
                    $(document).ready(function(){
                      $('#tahun').on('change', function(){
                        var kodekota=document.getElementById("kodekota").value;
                        var kodekec=document.getElementById("kodekec").value;
                        var kodekel=document.getElementById("kodekel").value;
                        var tahun=document.getElementById("tahun").value;
                        $.ajax({
                          type :'post',
                          url  :'serverside/get_chartbasisdata.php',
                          data :'tahun='+tahun+'&kodekota='+kodekota+'&kodekec='+kodekec+'&kodekel='+kodekel,
                          success : function(data){
                    
                          $('.hasil-chart').html(data);//menampilkan data ke dalam modal
                    
                          }
                        });
                        
                      })
                    });
                    </script>
                    <script type="text/javascript">
                    $(document).ready(function(){
                      $('#kodekec').on('change', function(){
                        var kodekota=document.getElementById("kodekota").value;
                        var kodekec=document.getElementById("kodekec").value;
                        var kodekel=document.getElementById("kodekel").value;
                        var tahun=document.getElementById("tahun").value;
                        $.ajax({
                          type :'post',
                          url  :'serverside/get_chartbasisdata.php',
                          data :'tahun='+tahun+'&kodekota='+kodekota+'&kodekec='+kodekec+'&kodekel='+kodekel,
                          success : function(data){
                    
                          $('.hasil-chart').html(data);//menampilkan data ke dalam modal
                    
                          }
                        });
                        
                      })
                    });
                    </script>
                     <script type="text/javascript">
                    $(document).ready(function(){
                      $('#kodekel').on('change', function(){
                        var kodekota=document.getElementById("kodekota").value;
                        var kodekec=document.getElementById("kodekec").value;
                        var kodekel=document.getElementById("kodekel").value;
                        var tahun=document.getElementById("tahun").value;
                        $.ajax({
                          type :'post',
                          url  :'serverside/get_chartbasisdata.php',
                          data :'tahun='+tahun+'&kodekota='+kodekota+'&kodekec='+kodekec+'&kodekel='+kodekel,
                          success : function(data){
                    
                          $('.hasil-chart').html(data);//menampilkan data ke dalam modal
                    
                          }
                        });
                        
                      })
                    });
                    </script>
                     <script type="text/javascript">
                    $(document).ready(function(){
                      $('#kodekota').on('change', function(){
                        var kodekota=document.getElementById("kodekota").value;
                        var kodekec=document.getElementById("kodekec").value;
                        var kodekel=document.getElementById("kodekel").value;
                        var tahun=document.getElementById("tahun").value;
                        $.ajax({
                          type :'post',
                          url  :'serverside/get_chartbasisdata.php',
                          data :'tahun='+tahun+'&kodekota='+kodekota+'&kodekec='+kodekec+'&kodekel='+kodekel,
                          success : function(data){
                    
                          $('.hasil-chart').html(data);//menampilkan data ke dalam modal
                    
                          }
                        });
                        
                      })
                    });
                    </script>
                    
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}

</style>
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4charts.XYChart);
chart.padding(40, 40, 40, 40);

var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataFields.category = "network";
categoryAxis.renderer.minGridDistance = 1;
categoryAxis.renderer.inversed = true;
categoryAxis.renderer.grid.template.disabled = true;

var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
valueAxis.min = 0;



var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.valueX = "MAU";
series.dataFields.categoryY = "network";
series.columns.template.tooltipText = "{categoryY}: [bold]{valueX}[/]";
series.columns.template.fillOpacity = .8;
series.columns.template.tooltipX = am4core.percent(100);
series.columns.template.tooltipY = am4core.percent(50);

var labelBullet = series.bullets.push(new am4charts.LabelBullet())
labelBullet.label.horizontalCenter = "left";
labelBullet.label.dx = 10;
labelBullet.label.text = "{valueX}";
labelBullet.locationX = 1;

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
series.columns.template.adapter.add("fill", function(fill, target){
  return chart.colors.getIndex(target.dataItem.index);
});

categoryAxis.sortBySeries = series;
chart.data = [
  <?php
   $querymenu2 = "SELECT * FROM kota order by kode_kota";
   $hasilmenu2 = mysqli_query($koneksi,$querymenu2);
   while ($rdata=mysqli_fetch_array($hasilmenu2)) {

    $querymenu22 = "SELECT count(*) as jmlh FROM rtlh where kode_kota='$rdata[kode_kota]'";
    $hasilmenu22 = mysqli_query($koneksi,$querymenu22);
    $rdata22=mysqli_fetch_array($hasilmenu22);

  ?>
    {
      "network": "<?php echo $rdata['nama_kota'];?>",
      "MAU": <?php echo $rdata22['jmlh'];?>
    },
    <?php
   }
   ?>
  ]

 

}); // end am4core.ready()
</script>
   <?php
    } elseif($_GET['module']=='penanganan'){
?>
<script language="javascript">
$(document).ready(function() {
	$('#kodekota').change(function() { 
		var kode_kota = $("#kodekota").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_datakecamatan.php',
			data: 'kodekota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kodekec').html(response);
                
                
			}
		});
    })
});
</script>	
<script language="javascript">
$(document).ready(function() {
	$('#kodekec').change(function() { 
		var kode_kec = $("#kodekec").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_datakelurahan.php',
			data: 'kodekec=' + kode_kec, 
			dataType: 'html',
			success: function(response) {
				$('#kodekel').html(response);
                
                
			}
		});
    })
});
</script>
<script type="text/javascript">
                    $(document).ready(function(){
                      $('#tahun').on('change', function(){
                        var kodekota=document.getElementById("kodekota").value;
                        var kodekec=document.getElementById("kodekec").value;
                        var kodekel=document.getElementById("kodekel").value;
                        var tahun=document.getElementById("tahun").value;
                        $.ajax({
                          type :'post',
                          url  :'serverside/get_chartpenanganan.php',
                          data :'tahun='+tahun+'&kodekota='+kodekota+'&kodekec='+kodekec+'&kodekel='+kodekel,
                          success : function(data){
                    
                          $('.hasil-chart').html(data);//menampilkan data ke dalam modal
                    
                          }
                        });
                        
                      })
                    });
                    </script>
                    <script type="text/javascript">
                    $(document).ready(function(){
                      $('#kodekec').on('change', function(){
                        var kodekota=document.getElementById("kodekota").value;
                        var kodekec=document.getElementById("kodekec").value;
                        var kodekel=document.getElementById("kodekel").value;
                        var tahun=document.getElementById("tahun").value;
                        $.ajax({
                          type :'post',
                          url  :'serverside/get_chartpenanganan.php',
                          data :'tahun='+tahun+'&kodekota='+kodekota+'&kodekec='+kodekec+'&kodekel='+kodekel,
                          success : function(data){
                    
                          $('.hasil-chart').html(data);//menampilkan data ke dalam modal
                    
                          }
                        });
                        
                      })
                    });
                    </script>
                     <script type="text/javascript">
                    $(document).ready(function(){
                      $('#kodekel').on('change', function(){
                        var kodekota=document.getElementById("kodekota").value;
                        var kodekec=document.getElementById("kodekec").value;
                        var kodekel=document.getElementById("kodekel").value;
                        var tahun=document.getElementById("tahun").value;
                        $.ajax({
                          type :'post',
                          url  :'serverside/get_chartpenanganan.php',
                          data :'tahun='+tahun+'&kodekota='+kodekota+'&kodekec='+kodekec+'&kodekel='+kodekel,
                          success : function(data){
                    
                          $('.hasil-chart').html(data);//menampilkan data ke dalam modal
                    
                          }
                        });
                        
                      })
                    });
                    </script>
                     <script type="text/javascript">
                    $(document).ready(function(){
                      $('#kodekota').on('change', function(){
                        var kodekota=document.getElementById("kodekota").value;
                        var kodekec=document.getElementById("kodekec").value;
                        var kodekel=document.getElementById("kodekel").value;
                        var tahun=document.getElementById("tahun").value;
                        $.ajax({
                          type :'post',
                          url  :'serverside/get_chartpenanganan.php',
                          data :'tahun='+tahun+'&kodekota='+kodekota+'&kodekec='+kodekec+'&kodekel='+kodekel,
                          success : function(data){
                    
                          $('.hasil-chart').html(data);//menampilkan data ke dalam modal
                    
                          }
                        });
                        
                      })
                    });
                    </script>
<style>
#chartdiv2 {
  width: 100%;
  height: 500px;
}

</style>
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv2", am4charts.XYChart);
chart.padding(40, 40, 40, 40);

var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataFields.category = "network";
categoryAxis.renderer.minGridDistance = 1;
categoryAxis.renderer.inversed = true;
categoryAxis.renderer.grid.template.disabled = true;

var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
valueAxis.min = 0;



var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.valueX = "MAU";
series.dataFields.categoryY = "network";
series.columns.template.tooltipText = "{categoryY}: [bold]{valueX}[/]";
series.columns.template.fillOpacity = .8;
series.columns.template.tooltipX = am4core.percent(100);
series.columns.template.tooltipY = am4core.percent(50);

var labelBullet = series.bullets.push(new am4charts.LabelBullet())
labelBullet.label.horizontalCenter = "left";
labelBullet.label.dx = 10;
labelBullet.label.text = "{valueX}";
labelBullet.locationX = 1;

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
series.columns.template.adapter.add("fill", function(fill, target){
  return chart.colors.getIndex(target.dataItem.index);
});

categoryAxis.sortBySeries = series;
chart.data = [
  <?php
   $querymenu25 = "SELECT * FROM kota order by kode_kota";
   $hasilmenu25 = mysqli_query($koneksi,$querymenu25);
   while ($rdata25=mysqli_fetch_array($hasilmenu25)) {

    $querymenu225 = "SELECT count(*) as jmlh FROM rtlh where kode_kota='$rdata25[kode_kota]' and sts_penanganan='Y'";
    $hasilmenu225 = mysqli_query($koneksi,$querymenu225);
    $rdata225=mysqli_fetch_array($hasilmenu225);
    if ($rdata225['jmlh']=='0'){ 
      $tttt='0';}
      else{
        $tttt=$rdata225['jmlh'];
      }

  ?>
    {
      "network": "<?php echo $rdata25['nama_kota'];?>",
      "MAU": <?php echo $tttt;?>
    },
    <?php
   }
   ?>
  ]

 

}); // end am4core.ready()
</script>
<?php
    }elseif($_GET['module']=='kumuh'){
      ?>
      <script language="javascript">
      $(document).ready(function() {
        $('#kodekota').change(function() { 
          var kode_kota = $("#kodekota").val();
          $.ajax({
            type: 'POST',
            url: 'serverside/get_datakecamatan.php',
            data: 'kodekota=' + kode_kota, 
            dataType: 'html',
            success: function(response) {
              $('#kodekec').html(response);
                      
                      
            }
          });
          })
      });
      </script>	
      <script language="javascript">
      $(document).ready(function() {
        $('#kodekec').change(function() { 
          var kode_kec = $("#kodekec").val();
          $.ajax({
            type: 'POST',
            url: 'serverside/get_datakelurahan.php',
            data: 'kodekec=' + kode_kec, 
            dataType: 'html',
            success: function(response) {
              $('#kodekel').html(response);
                      
                      
            }
          });
          })
      });
      </script>
      <script type="text/javascript">
                    $(document).ready(function(){
                      $('#tahun').on('change', function(){
                        var kodekota=document.getElementById("kodekota").value;
                        var kodekec=document.getElementById("kodekec").value;
                        var kodekel=document.getElementById("kodekel").value;
                        var tahun=document.getElementById("tahun").value;
                        $.ajax({
                          type :'post',
                          url  :'serverside/get_chartkumuh.php',
                          data :'tahun='+tahun+'&kodekota='+kodekota+'&kodekec='+kodekec+'&kodekel='+kodekel,
                          success : function(data){
                    
                          $('.hasil-chart').html(data);//menampilkan data ke dalam modal
                    
                          }
                        });
                        
                      })
                    });
                    </script>
                    <script type="text/javascript">
                    $(document).ready(function(){
                      $('#kodekec').on('change', function(){
                        var kodekota=document.getElementById("kodekota").value;
                        var kodekec=document.getElementById("kodekec").value;
                        var kodekel=document.getElementById("kodekel").value;
                        var tahun=document.getElementById("tahun").value;
                        $.ajax({
                          type :'post',
                          url  :'serverside/get_chartkumuh.php',
                          data :'tahun='+tahun+'&kodekota='+kodekota+'&kodekec='+kodekec+'&kodekel='+kodekel,
                          success : function(data){
                    
                          $('.hasil-chart').html(data);//menampilkan data ke dalam modal
                    
                          }
                        });
                        
                      })
                    });
                    </script>
                     <script type="text/javascript">
                    $(document).ready(function(){
                      $('#kodekel').on('change', function(){
                        var kodekota=document.getElementById("kodekota").value;
                        var kodekec=document.getElementById("kodekec").value;
                        var kodekel=document.getElementById("kodekel").value;
                        var tahun=document.getElementById("tahun").value;
                        $.ajax({
                          type :'post',
                          url  :'serverside/get_chartkumuh.php',
                          data :'tahun='+tahun+'&kodekota='+kodekota+'&kodekec='+kodekec+'&kodekel='+kodekel,
                          success : function(data){
                    
                          $('.hasil-chart').html(data);//menampilkan data ke dalam modal
                    
                          }
                        });
                        
                      })
                    });
                    </script>
                    <script type="text/javascript">
                    $(document).ready(function(){
                      $('#kodekota').on('change', function(){
                        var kodekota=document.getElementById("kodekota").value;
                        var kodekec=document.getElementById("kodekec").value;
                        var kodekel=document.getElementById("kodekel").value;
                        var tahun=document.getElementById("tahun").value;
                        $.ajax({
                          type :'post',
                          url  :'serverside/get_chartkumuh.php',
                          data :'tahun='+tahun+'&kodekota='+kodekota+'&kodekec='+kodekec+'&kodekel='+kodekel,
                          success : function(data){
                    
                          $('.hasil-chart').html(data);//menampilkan data ke dalam modal
                    
                          }
                        });
                        
                      })
                    });
                    </script>
      <style>
      #chartdiv3 {
        width: 100%;
        height: 500px;
      }
      
      </style>
      <script>
      am4core.ready(function() {
      
      // Themes begin
      am4core.useTheme(am4themes_animated);
      // Themes end
      
      var chart = am4core.create("chartdiv3", am4charts.XYChart);
      chart.padding(40, 40, 40, 40);
      
      var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
      categoryAxis.renderer.grid.template.location = 0;
      categoryAxis.dataFields.category = "network";
      categoryAxis.renderer.minGridDistance = 1;
      categoryAxis.renderer.inversed = true;
      categoryAxis.renderer.grid.template.disabled = true;
      
      var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
      valueAxis.min = 0;
      
      
      
      var series = chart.series.push(new am4charts.ColumnSeries());
      series.dataFields.valueX = "MAU";
      series.dataFields.categoryY = "network";
      series.columns.template.tooltipText = "{categoryY}: [bold]{valueX}[/]";
      series.columns.template.fillOpacity = .8;
      series.columns.template.tooltipX = am4core.percent(100);
      series.columns.template.tooltipY = am4core.percent(50);
      
      var labelBullet = series.bullets.push(new am4charts.LabelBullet())
      labelBullet.label.horizontalCenter = "left";
      labelBullet.label.dx = 10;
      labelBullet.label.text = "{valueX}";
      labelBullet.locationX = 1;
      
      // as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
      series.columns.template.adapter.add("fill", function(fill, target){
        return chart.colors.getIndex(target.dataItem.index);
      });
      
      categoryAxis.sortBySeries = series;
      chart.data = [
        <?php
   $querymenu25 = "SELECT * FROM kota order by kode_kota";
   $hasilmenu25 = mysqli_query($koneksi,$querymenu25);
   while ($rdata25=mysqli_fetch_array($hasilmenu25)) {

    $querymenu225 = "SELECT count(*) as jmlh FROM rtlh where kode_kota='$rdata25[kode_kota]' and jenis_kawasan='KUMUH'";
    $hasilmenu225 = mysqli_query($koneksi,$querymenu225);
    $rdata225=mysqli_fetch_array($hasilmenu225);
    if ($rdata225['jmlh']=='0'){ 
      $tttt='0';}
      else{
        $tttt=$rdata225['jmlh'];
      }

  ?>
    {
      "network": "<?php echo $rdata25['nama_kota'];?>",
      "MAU": <?php echo $tttt;?>
    },
    <?php
   }
   ?>
        ]
      
       
      
      }); // end am4core.ready()
      </script>
<?php
}
?>