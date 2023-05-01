<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css"/>
    <link
      rel="stylesheet"
    ></link>
    <title>Web Ananda NR</title>
    <ul id="float">
    <li><a href="index.php">Home</a></li>
    <li><a href="tampilan.php">Guestbook</a></li>
    </ul>
  </head>
  <body>
    <div id="container">
      <div id="profile">
        <div id="image">
          <img
            id="profile-photo"
            src="Ananda1.jpeg"
            alt="Profile-Image"
          />
          <a href="#"><i class="fas fa-pen stroke-transparent"></i></a>
        </div>
        <p id="name">
          Ananda Nur R<br /><span id="nim"
            >Nim 2000018408</span
          >
        </p>
        <p id="prodi">
          Prodi Informatika<br /><span id="prodi"
            >Universitas Ahmad Dahlan</span
          >
        </p>
        <hr width="100%" />
        <div id="about">
          <p style="display: inline">About Me</p>
        </div>
        <p id="Cerita">
          <br />Mahasiswi Semester 6<strong
            ></strong
          >
        </p>
        <p id="more-about">
          More about me<br /><span
            >anandarahmawati025@gmail.com</span
          >
        </p>
        <p id="telephone">Telephone<br /><strong>081226884805</strong></p>
      </div>
         <div id="info-cards">
        <div class="card" >
          <p>
            <i class="fas fa-briefcase stroke-transparent"></i>
          </p>
          <ul>
            <li>
              <p class="tags">
                Prodi Informatika<br /><span
                  >Informatika  bidang ilmu yang mempelajari menggunakan teknologi komputer secara 
                  optimal sebagai solusi masalah transformasi 
                  atau pengolahan data dengan proses logika.</span>
              </p>
            </li>
          </ul>
        </div>
        <div class="card">
          <p>
            <i class="fas fa-briefcase stroke-transparent"></i>
          </p>
          <ul>
            <li>
              <p class="tags">
                Alasan Masuk Informatika<br /><span
                  >Salah satu alasannya yaitu dulu sering mengoprsikan komputer sejak kecil dan teknologi 
                  akan terus berkembang sehingga saya merasa ingin mengetahui lebih jauh
                </span>
              </p>
            </li>
          </ul>
    </div>
    <div class="card">
          <p>
            <i class="fas fa-briefcase stroke-transparent"></i>
          </p>
          <ul>
            <li>
              <p class="tags">
                Pengalaman<br /><span
                  >Ada beberapa pengalaman yang telah atau sedang saya jalani diantaranya berikut ini :
                </span>
                <ul>
                  <tr>
                    <td colspan="3"><li>Laboratory Assistant Computer Graphics </li></td>
                  </tr>
                   <tr>
                    <td colspan="3"><li>Laboratory Assistant Discrate Mathematics</li></td>
                  </tr>
                  <tr>
                    <td colspan="3"><li>MBKM AI Mastery at Orbit Academy</li></td>
                  </tr>
                      </ul>
                  </table>
                  <th width="50%" colspan="3"><br />Bahasa Yang Dikuasai</th>
                </tr>
                <ul>
                  <tr>
                    <td colspan="3"><li>Bahasa Indonesia </li></td>
                  </tr>
                      </ul>
                  </table>
              </p>
            </li>
          </ul>
    </div>
    <div class="container">
    <?php
$filename = 'counter.txt';	
function counter(){		
	global $filename;	
        if(file_exists($filename)){		
            $value = file_get_contents($filename);	
        }else{		
            $value = 0;		
        }
 
                file_put_contents($filename, ++$value);		
}
counter();
echo '<h3>Total pengunjung: '.file_get_contents($filename);	
?>
    </div>
</body>
</html>
    <script src="./index.js"></script>
  </body>
</html>