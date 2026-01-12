<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="unix" />
    <title>Hilo Yamamoto, Ph.D.</title>
    <link href="css/style.css" rel="stylesheet" />
    <style>
      .stamp {
        font-size: 8px;
      }
      .normal-font {
        font-size: 14px;
      }
      .large-font {
        font-size: 16pt;
        font-weight: bold;
      }
      .small-font {
        font-size: 9px;
      }
      .center img {
        vertical-align: bottom;
      }
    </style>
  </head>

  <body>
    <span class="large-font">yamagen.sdf.org</span> <br />
    Hilofumi Yamamoto, Ph.D. in Linguistics <br />
    <img src="./images/githubicon01.svg" alt="TAI-tech" width="140" />
    <a href="http://yamagen.sdf.org/">
      <img src="./images/qr20260112131327366.png" alt="qr-code" width="140" />
    </a>
    <br />
    <span class="stamp">Last change: 2026/01/12-14:06:19.</span> <br />

    <?php echo file_get_contents("content.html"); ?>

    <span class="small-font">
      Hosting for this site is provided by
      <a target="new" href="http://sdf.org">
        <!-- <img src="http://sdf.org/sdfbanner.png" width="60"> -->
        The SDF Public Access UNIX System
      </a>
    </span>
  </body>
</html>
