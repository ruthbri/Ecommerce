<!DOCTYPE html>
<html>
    <head>
        <title>Web Merchant</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<style>

@charset "UTF-8";
:root {
  --color-brand-primary: hsl(var(--color-brand-primary-h), 43%, 43%);
  --color-brand-primary-h: 251;
  --color-brand-primary-s: 43%;
  --color-brand-primary-l: 43%;
  --color-brand-accent: hsl(var(--color-brand-accent-h), 96%, 61%);
  --color-brand-accent-h: 16;
  --color-brand-accent-s: 96%;
  --color-brand-accent-l: 61%;
  --color-brand-accent-bg: hsl(calc(var(--color-brand-accent-h) + 17), 100%, 96%);
  --ratio: 1.4;
  --s-6: calc(var(--s-5) / var(--ratio));
  --s-5: calc(var(--s-4) / var(--ratio));
  --s-4: calc(var(--s-3) / var(--ratio));
  --s-3: calc(var(--s-2) / var(--ratio));
  --s-2: calc(var(--s-1) / var(--ratio));
  --s-1: calc(var(--s0) / var(--ratio));
  --s0: calc(1.05rem + 0.333vw);
  --s1: calc(var(--s0) * var(--ratio));
  --s2: calc(var(--s1) * var(--ratio));
  --s3: calc(var(--s2) * var(--ratio));
  --s4: calc(var(--s3) * var(--ratio));
  --s5: calc(var(--s4) * var(--ratio));
  --s6: calc(var(--s5) * var(--ratio));
  font-size: 62.5%;
  line-height: 0.6;
  box-sizing: border-box;
}


body {
  font-size: 1.4rem;
  font-family: "Inter", sans-serif;
  font-weight: 300;
  background-color: white;
  min-height: 100vh;
}
@media (min-width: 48em) {
  body {
    font-size: 1.5rem;
  }
}


.c-section {
  padding: 0 var(--s3);
}
.c-section__title {
  padding: var(--s2) var(--s3) calc(var(--s6) * 1.8);
  margin: 0 calc(var(--s3) * -1);
  color: #fff;
  font-size: var(--s4);
  font-weight: 700;
  letter-spacing: -0.04em;
  text-align: center;
}
@media (min-width: 40.625em) {
  .c-section__title {
    padding: var(--s2) var(--s3) var(--s4);
  }

  .c-section__title {
    display: flex;
    align-items: self-start;
    justify-content: flex-end;
    position: relative;

  }
}
.c-section__title:after {
  content: "";
  display: block;
  background-size: calc(var(--s5) * 3) calc(var(--s5) * 3);
  width: calc(var(--s5) * 3);
  height: calc(var(--s5) * 3);
  background-repeat: no-repeat;
  background-position: center;
  margin-left: auto;
  margin-right: auto;
  transform: translateY(11rem);
  z-index: 1;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' id='aadef149-4ba5-4382-9e09-7df651a328a5' data-name='Layer 1' width='704' height='745.19433' viewBox='0 0 704 745.19433' class='injected-svg modal__media modal__lg_media' data-src='https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/mobile_web_2g8b.svg'%3E%3Ctitle%3Emobile_web%3C/title%3E%3Cpath d='M344.69391,661.25125l-8.38722-33.073A429.46111,429.46111,0,0,0,290.74208,611.834l-1.05792,15.37062L285.39,610.2712c-19.202-5.482-32.265-7.89648-32.265-7.89648s17.64872,67.09731,54.6606,118.39272l43.124,7.57249-33.50125,4.83219A173.75069,173.75069,0,0,0,332.395,749.05228c53.84043,49.96979,113.80669,72.89422,133.93843,51.20309s-7.1946-79.78376-61.035-129.75355c-16.69106-15.49113-37.65818-27.92221-58.646-37.70546Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cpath d='M424.44317,625.32976l9.91563-32.64732a429.46451,429.46451,0,0,0-30.557-37.54385L394.9511,567.7497l5.07688-16.71545c-13.60408-14.61837-23.53857-23.43755-23.53857-23.43755s-19.57459,66.561-14.40543,129.60362l33.00186,28.77326L363.9095,672.79331a173.75138,173.75138,0,0,0,4.62073,21.34072c20.26038,70.60659,59.74453,121.22757,88.19038,113.06511s35.08143-72.01738,14.821-142.624c-6.28092-21.88874-17.80407-43.36822-30.71362-62.59176Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cellipse cx='352' cy='727.19433' rx='352' ry='18' fill='%233f3d56'/%3E%3Cpath d='M805.65354,250.35009h-3.99878V140.80476a63.40186,63.40186,0,0,0-63.40205-63.40193H506.16627a63.40186,63.40186,0,0,0-63.402,63.40193V741.77894a63.40186,63.40186,0,0,0,63.402,63.40193H738.25271a63.40186,63.40186,0,0,0,63.40205-63.40193V328.32631h3.99878Z' transform='translate(-248 -77.40283)' fill='%233f3d56'/%3E%3Cpath d='M788.16,141.24713v600.09a47.3508,47.3508,0,0,1-47.35,47.35H507.61a47.35084,47.35084,0,0,1-47.35-47.35v-600.09a47.35089,47.35089,0,0,1,47.35-47.35H535.9a22.50661,22.50661,0,0,0,20.83,30.99H689.69a22.50673,22.50673,0,0,0,20.83-30.99h30.29A47.35084,47.35084,0,0,1,788.16,141.24713Z' transform='translate(-248 -77.40283)' fill='%23fff'/%3E%3Cpath d='M788.16,612.40716v128.93a47.3508,47.3508,0,0,1-47.35,47.35H507.61a47.35084,47.35084,0,0,1-47.35-47.35v-116.36a222.97136,222.97136,0,0,1,327.9-12.57Z' transform='translate(-248 -77.40283)' fill='%23e6e6e6'/%3E%3Cpolygon points='322.174 511.167 312.75 511.167 315.891 327.064 319.033 327.064 322.174 511.167' fill='%23e6e6e6'/%3E%3Cpath d='M578.02779,288.5586l15.21367-23.512a352.49687,352.49687,0,0,0-15.60827-36.53743l-9.83764,7.94573,7.78946-12.03815c-7.42343-14.61275-13.26462-23.81956-13.26462-23.81956s-30.5115,48.08118-40.70521,98.98824l19.52266,30.17145L519.5254,312.3006a142.61,142.61,0,0,0-1.18572,17.8826c0,60.291,19.69081,109.16642,43.98071,109.16642s43.98072-48.87547,43.98072-109.16642c0-18.69079-4.22846-38.24546-10.0614-56.33418Z' transform='translate(-248 -77.40283)' fill='%23e6e6e6'/%3E%3Cpolygon points='267.479 524.167 262.908 524.167 264.432 434.879 265.955 434.879 267.479 524.167' fill='%23e6e6e6'/%3E%3Cpath d='M519.28775,456.06773l7.37846-11.40307a170.95723,170.95723,0,0,0-7.56983-17.72025l-4.77115,3.85359,3.7778-5.83837c-3.60028-7.087-6.43319-11.55223-6.43319-11.55223s-14.79775,23.31885-19.74158,48.00821l9.46827,14.63282-10.48179-8.46609a69.16528,69.16528,0,0,0-.57506,8.67286c0,29.24044,9.54982,52.94451,21.33016,52.94451S533,505.49564,533,476.2552c0-9.06483-2.05076-18.54863-4.87967-27.32146Z' transform='translate(-248 -77.40283)' fill='%23e6e6e6'/%3E%3Cpolygon points='386.479 524.167 381.908 524.167 383.432 434.879 384.955 434.879 386.479 524.167' fill='%23e6e6e6'/%3E%3Cpath d='M638.28775,456.06773l7.37846-11.40307a170.95723,170.95723,0,0,0-7.56983-17.72025l-4.77115,3.85359,3.7778-5.83837c-3.60028-7.087-6.43319-11.55223-6.43319-11.55223s-14.79775,23.31885-19.74158,48.00821l9.46827,14.63282-10.48179-8.46609a69.16528,69.16528,0,0,0-.57506,8.67286c0,29.24044,9.54982,52.94451,21.33016,52.94451S652,505.49564,652,476.2552c0-9.06483-2.05076-18.54863-4.87967-27.32146Z' transform='translate(-248 -77.40283)' fill='%23e6e6e6'/%3E%3Ccircle cx='264' cy='186.19433' r='42' fill='%23e6e6e6'/%3E%3Cpolygon points='415.872 234.173 492.533 236.077 502.852 144.666 415.872 144.666 415.872 234.173' fill='%232f2e41'/%3E%3Cpath d='M644.76993,239.9612l-21.14671-81.078s5.84211-38.92023,19.97409-38.27814-3.66865,38.049-3.66865,38.049l23.94311,70.03766Z' transform='translate(-248 -77.40283)' fill='%23ffb8b8'/%3E%3Cpath d='M686.22412,443.10875l3.31146,33.11459s-104.311,71.19639-104.311,100.99953-3.31146,124.17974-3.31146,124.17974l38.08179,1.65573,3.31146-44.70471s8.27865-49.67189,3.31146-67.88492l54.63908-41.39325s-16.5573,19.86876-13.24584,54.63909S663.0439,706.3698,663.0439,706.3698l39.73752,3.31146s4.96719-36.42606,6.62292-39.73752,9.93438-62.91773,1.65573-79.475l67.88493-79.475s23.18022-29.80314,0-59.60627l-13.24584-6.62292Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Cpath d='M583.56887,694.77969l-3.31146,21.52449-21.52449,51.32763s-36.42606,18.213-9.93438,21.52449,36.42606-3.31146,41.39325-11.59011,14.90157-21.52449,14.90157-21.52449L603.43763,790.812h8.27865l13.56912-47.49194a29.95239,29.95239,0,0,0-5.09327-26.76756q-.09786-.12417-.1972-.24835c-6.62292-8.27865-3.31146-19.86876-3.31146-19.86876Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Cpath d='M666.35536,694.77969l-3.31146,21.52449-21.52449,51.32763s-36.42605,18.213-9.93437,21.52449,36.426-3.31146,41.39324-11.59011,14.90157-21.52449,14.90157-21.52449L686.22412,790.812h8.27865l13.56913-47.49194a29.95239,29.95239,0,0,0-5.09328-26.76756q-.09786-.12417-.1972-.24835c-6.62292-8.27865-3.31146-19.86876-3.31146-19.86876Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Ccircle cx='458.09288' cy='162.05113' r='33.1146' fill='%23ffb8b8'/%3E%3Cpath d='M704.43715,267.60138l14.90157,34.77032,29.80314-23.18022s-18.213-24.83594-18.213-28.1474Z' transform='translate(-248 -77.40283)' fill='%23ffb8b8'/%3E%3Cpath d='M707.74861,287.47013l7.06394,4.34051s22.82273-12.10094,28.576-20.6387c0,0,20.65486-6.882,28.93351,9.67527s-4.96719,130.80267-4.96719,130.80267,8.27865,11.59011,6.62292,16.5573S778.945,441.453,778.945,441.453v9.93438s-94.37661,1.65573-94.37661-6.62292V418.2728l-9.93438-3.31146s-9.93438,21.52449-13.24584,19.86876-19.86876-14.90157-19.86876-14.90157,26.49168-87.75369,41.39325-102.65526l18.213-31.45887Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cpath d='M704.43715,289.12586s-3.31146-6.62292-8.27865-8.27865-29.80314-36.42605-29.80314-36.42605l3.31146-18.213-33.1146-4.96719s1.65573,18.213,8.27865,29.80314,43.049,71.19638,43.049,71.19638l18.213-33.1146Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cpath d='M730.101,420.75639l-19.86875,59.60628s-41.39325,46.36044-18.213,46.36044,34.77032-41.39325,34.77032-41.39325l28.14741-59.60628Z' transform='translate(-248 -77.40283)' fill='%23ffb8b8'/%3E%3Cpath d='M666.40465,239.938c26.52245-10.63018,52.66949-12.89779,78.1352,0V218.51138A13.95535,13.95535,0,0,0,730.58449,204.556H677.42954a11.02489,11.02489,0,0,0-11.02489,11.02489Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Cpath d='M750.79759,285.8144s15.10671-12.79586,23.28279,1.88072,3.20889,77.59432,1.55316,85.873-13.24584,59.60628-13.24584,59.60628l-39.73752-8.27865s-3.31146-23.18022,6.62292-21.52449Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cpath d='M767.27813,271.58657c-7.47508-4.10485-10.95384-13.3183-11.20173-21.8427-.24822-8.5244,1.81928-16.96078,1.98174-25.48727a19.70066,19.70066,0,0,0-.44217-5.19738,19.99152,19.99152,0,0,0-2.85872-5.91734c-9.72073-14.89484-26.61815-25.37235-44.41647-25.53721a19.72685,19.72685,0,0,0-7.51573,1.38171c-1.84014.737-2.44183.64676-2.79446,2.90614a18.80778,18.80778,0,0,0-12.90778.41044,43.67006,43.67006,0,0,0-11.28781,6.72245,50.91134,50.91134,0,0,0-5.707,4.94121c-9.4059,9.74414-11.57188,24.76187-8.847,38.02816.88586,4.313-3.3647,8.47684-6.88166,11.12594s-7.57824,5.08173-9.3054,9.132c-1.66117,3.89607-.74885,8.35188-1.08333,12.57414a21.50585,21.50585,0,0,1-13.71993,18.06931,6.619,6.619,0,0,0,6.38589,2.24579,15.71689,15.71689,0,0,0,6.65437-3.168,39.58173,39.58173,0,0,0,14.7562-21.89461c1.03307,4.69842.63244,9.54449.59442,14.355a40.097,40.097,0,0,1-2.90746,15.67932,22.95849,22.95849,0,0,1-10.57045,11.63912c4.6135,2.25911,9.69783.62172,13.60738-2.71074,3.90938-3.33246,6.21789-8.16974,7.83049-13.047a65.02715,65.02715,0,0,0,3.1334-24.67964A35.23865,35.23865,0,0,1,674.197,295.3399a36.73,36.73,0,0,1-12.45807,21.62429,71.55883,71.55883,0,0,0,32.75215-8.24838,18.53725,18.53725,0,0,0,6.71768-5.17351c3.251-4.50991,2.48187-10.6609,1.57006-16.14519-.72122-4.3364,4.69775-10.60546,1.5945-13.71918a5.14429,5.14429,0,0,0-3.44914-1.48246c-9.45259-.91006-18.20527-5.65746-23.25035-13.70275-3.53538-5.63781-5.87629-12.07592-5.87629-18.09738a32.93149,32.93149,0,1,1,64.38483,9.77247,66.08219,66.08219,0,0,0-2.39716,11.16014,87.6848,87.6848,0,0,1-2.6728,12.98267c-2.34787,8.17535-6.32542,16.51719-13.68526,20.7814,2.47315,1.35348,5.33556,1.41445,8.13766,1.72322,9.23506,1.01758,18.9478.79289,27.30655-3.26312C761.2304,289.496,767.87372,280.85839,767.27813,271.58657Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Cpolygon points='490.38 252.288 481.739 323.422 482.101 255.6 490.38 252.288' opacity='0.2'/%3E%3Cpolygon points='518.772 336.291 515.216 358.255 523.494 361.567 518.772 336.291' opacity='0.2'/%3E%3C/svg%3E");
}
@media (min-width: 40.625em) {
  .c-section__title:after {
    margin-left: auto;
    margin-right: 20%;
    transform: translateY(2rem);
  }
}
.c-section span:before {
  content: "";
  display: block;
  position: absolute;
  top: -100%;
  left: 0;
  width: 100%;
  height: 200%;
  transform: skew(0deg, 10deg);
  z-index: -1;
  background: var(--color-brand-primary);
  background-attachment: fixed;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='487' height='243.5' viewBox='0 0 1600 800' style='&%2310; opacity: .45;&%2310;'%3E%3Cpath fill='%23fdb9a0' d='M1102.5 734.8c2.5-1.2 24.8-8.6 25.6-7.5.5.7-3.9 23.8-4.6 24.5-.2.3-16-12.3-21-17zm123.8-505.7c0-.1-4.9-9.4-7-14.2-.1-.3-.3-1.1-.4-1.6-.1-.4-.3-.7-.6-.9-.3-.2-.6-.1-.8.1l-13.1 12.3c-.2.2-.3.5-.4.8 0 .3 0 .7.2 1 .1.1 1.4 2.5 2.1 3.6 2.4 3.7 6.5 12.1 6.5 12.2.2.3.4.5.7.6.3 0 .5-.1.7-.3 0 0 1.8-2.5 2.7-3.6 1.5-1.6 3-3.2 4.6-4.7 1.2-1.2 1.6-1.4 2.1-1.6.5-.3 1.1-.5 2.5-1.9.4-.5.5-1.3.2-1.8zM33 770.3c0-.7-.5-1.2-1.2-1.2-.1 0-.3 0-.4.1-1.6.2-14.3.1-22.2 0-.3 0-.6.1-.9.4-.2.2-.4.5-.4.9 0 .2 0 4.9.1 5.9l.4 13.6c0 .3.2.6.4.9.2.2.5.3.8.3h.1c7.3-.7 14.7-.9 22-.6.3 0 .7-.1.9-.3.2-.2.4-.6.4-.9-.1-6.1-.1-13.2 0-19.1z' style='&%2310;'/%3E%3Cpath fill='%23fee272' d='M171.1 383.4c1.3-2.5 14.3-22 15.6-21.6.8.3 11.5 21.2 11.5 22.1-.1.3-20.3.1-27.1-.5zm425.3 328.4c-.1-.1-6.7-8.2-9.7-12.5-.2-.3-.5-1-.7-1.5-.2-.4-.4-.7-.7-.8-.3-.1-.6 0-.8.3L574 712c-.2.2-.2.5-.2.9 0 .3.2.7.4.9.1.1 1.8 2.2 2.8 3.1 3.1 3.1 8.8 10.5 8.9 10.6.2.3.5.4.8.4.3 0 .5-.2.6-.5 0 0 1.2-2.8 2-4.1 1.1-1.9 2.3-3.7 3.5-5.5.9-1.4 1.3-1.7 1.7-2 .5-.4 1-.7 2.1-2.4.3-.3.2-1.1-.2-1.6zm131.1-531.9c.6.2 1.3-.2 1.4-.8v-.4c.2-1.4 2.8-12.6 4.5-19.5.1-.3 0-.6-.2-.8-.2-.3-.5-.4-.8-.5-.2 0-4.7-1.1-5.7-1.3l-13.4-2.7c-.3-.1-.7 0-.9.2-.2.2-.4.4-.5.6v.1c-.8 6.5-2.2 13.1-3.9 19.4-.1.3 0 .6.2.9.2.3.5.4.8.5 5.8 1.3 12.7 2.9 18.5 4.3zm1-1.8c-.1-.1-.2-.2-.4-.2.2 0 .3.1.4.2z'/%3E%3Cg fill='%23eac5e7'%3E%3Cpath d='M699.6 472.7c-1.5 0-2.8-.8-3.5-2.3-.8-1.9 0-4.2 1.9-5 3.7-1.6 6.8-4.7 8.4-8.5 1.6-3.8 1.7-8.1.2-11.9-.3-.9-.8-1.8-1.2-2.8-.8-1.7-1.8-3.7-2.3-5.9-.9-4.1-.2-8.6 2-12.8 1.7-3.1 4.1-6.1 7.6-9.1 1.6-1.4 4-1.2 5.3.4 1.4 1.6 1.2 4-.4 5.3-2.8 2.5-4.7 4.7-5.9 7-1.4 2.6-1.9 5.3-1.3 7.6.3 1.4 1 2.8 1.7 4.3l1.5 3.3c2.1 5.6 2 12-.3 17.6-2.3 5.5-6.8 10.1-12.3 12.5-.4.2-.9.3-1.4.3zm40.8-51.3c1.5-.2 3 .5 3.8 1.9 1.1 1.8.4 4.2-1.4 5.3-3.7 2.1-6.4 5.6-7.6 9.5-1.2 4-.8 8.4 1.1 12.1.4.9 1 1.7 1.6 2.7 1 1.7 2.2 3.5 3 5.7 1.4 4 1.2 8.7-.6 13.2-1.4 3.4-3.5 6.6-6.8 10.1-1.5 1.6-3.9 1.7-5.5.2-1.6-1.4-1.7-3.9-.2-5.4 2.6-2.8 4.3-5.3 5.3-7.7 1.1-2.8 1.3-5.6.5-7.9-.5-1.3-1.3-2.7-2.2-4.1-.6-1-1.3-2.1-1.9-3.2-2.8-5.4-3.4-11.9-1.7-17.8 1.8-5.9 5.8-11 11.2-14 .4-.4.9-.6 1.4-.6zM261.3 590.9c5.7 6.8 9 15.7 9.4 22.4.5 7.3-2.4 16.4-10.2 20.4-3 1.5-6.7 2.2-11.2 2.2-7.9-.1-12.9-2.9-15.4-8.4-2.1-4.7-2.3-11.4 1.8-15.9 3.2-3.5 7.8-4.1 11.2-1.6 1.2.9 1.5 2.7.6 3.9-.9 1.2-2.7 1.5-3.9.6-1.8-1.3-3.6.6-3.8.8-2.4 2.6-2.1 7-.8 9.9 1.5 3.4 4.7 5 10.4 5.1 3.6 0 6.4-.5 8.6-1.6 4.7-2.4 7.7-8.6 7.2-15-.5-7.3-5.3-18.2-13-23.9-4.2-3.1-8.5-4.1-12.9-3.1-3.1.7-6.2 2.4-9.7 5-6.6 5.1-11.7 11.8-14.2 19-2.7 7.7-2.1 15.8 1.9 23.9.7 1.4.1 3.1-1.3 3.7-1.4.7-3.1.1-3.7-1.3-4.6-9.4-5.4-19.2-2.2-28.2 2.9-8.2 8.6-15.9 16.1-21.6 4.1-3.1 8-5.1 11.8-6 6-1.4 12 0 17.5 4 2.1 1.7 4.1 3.6 5.8 5.7z'/%3E%3Ccircle cx='1013.7' cy='153.9' r='7.1'/%3E%3Ccircle cx='1024.3' cy='132.1' r='7.1'/%3E%3Ccircle cx='1037.3' cy='148.9' r='7.1'/%3E%3Cpath d='M1508.7 297.2c-4.8-5.4-9.7-10.8-14.8-16.2 5.6-5.6 11.1-11.5 15.6-18.2 1.2-1.7.7-4.1-1-5.2-1.7-1.2-4.1-.7-5.2 1-4.2 6.2-9.1 11.6-14.5 16.9-4.8-5-9.7-10-14.7-14.9-1.5-1.5-3.9-1.5-5.3 0-1.5 1.5-1.5 3.9 0 5.3 4.9 4.8 9.7 9.8 14.5 14.8-1.1 1.1-2.3 2.2-3.5 3.2-4.1 3.8-8.4 7.8-12.4 12-1.4 1.5-1.4 3.8 0 5.3 1.5 1.4 3.9 1.4 5.3-.1 3.9-4 8.1-7.9 12.1-11.7 1.2-1.1 2.3-2.2 3.5-3.3 4.9 5.3 9.8 10.6 14.6 15.9l.2.2c1.4 1.4 3.7 1.5 5.2.2 1.7-1.2 1.8-3.6.4-5.2zM327.6 248.6l-.4-2.6c-1.5-11.1-2.2-23.2-2.3-37 0-5.5 0-11.5.2-18.5v-2.3c0-5 0-11.2 3.9-13.5 2.2-1.3 5.1-1 8.5.9 5.7 3.1 13.2 8.7 17.5 14.9 5.5 7.8 7.3 16.9 5 25.7-3.2 12.3-15 31-30 32.1l-2.4.3zm4.5-69.4c-.2 0-.3 0-.4.1-.1.1-.7.5-1.1 2.7-.3 1.9-.3 4.2-.3 6.3v2.4c-.2 6.9-.2 12.8-.2 18.3.1 12.5.7 23.5 2 33.7 11-2.7 20.4-18.1 23-27.8 1.9-7.2.4-14.8-4.2-21.3-3.9-5.5-10.9-10.6-15.9-13.3-1.4-.8-2.4-1.1-2.9-1.1zM516.3 60.8c-.1 0-.2 0-.4-.1-2.4-.7-4-.9-6.7-.7-.7 0-1.3-.5-1.4-1.2 0-.7.5-1.3 1.2-1.4 3.1-.2 4.9 0 7.6.8.7.2 1.1.9.9 1.6-.2.6-.7 1-1.2 1zm-10.2 9.7c-.5 0-1-.3-1.2-.8-.8-2.1-1.2-4.3-1.3-6.6 0-.7.5-1.3 1.2-1.3s1.3.5 1.3 1.2c.1 2 .5 3.9 1.1 5.8.2.7-.1 1.4-.8 1.6 0 .1-.2.1-.3.1zm-12-6.1c-.4 0-.8-.2-1-.5-.4-.6-.3-1.4.2-1.8 1.8-1.4 3.7-2.6 5.8-3.6.6-.3 1.4 0 1.7.6.3.6 0 1.4-.6 1.7-1.9.9-3.7 2-5.3 3.3-.2.2-.5.3-.8.3zm6.4-9.1c-.5 0-.9-.3-1.2-.7-.5-1-1.2-1.9-2.4-3.4-.3-.4-.7-.9-1.1-1.4-.4-.6-.3-1.4.2-1.8.6-.4 1.4-.3 1.8.2.4.5.8 1 1.1 1.4 1.3 1.6 2.1 2.6 2.7 3.9.3.6 0 1.4-.6 1.7-.1.1-.3.1-.5.1zm6.2-.3c-.3 0-.5-.1-.8-.2-.6-.4-.7-1.2-.3-1.8 1.2-1.7 2.3-3.4 3.3-5.2.3-.6 1.1-.9 1.7-.5.6.3.9 1.1.5 1.7-1 1.9-2.2 3.8-3.5 5.6-.2.2-.5.4-.9.4zm522.6 327.8c-.1 0-.2 0-.4-.1-2.4-.7-4-.9-6.7-.7-.7 0-1.3-.5-1.4-1.2 0-.7.5-1.3 1.2-1.4 3.1-.2 4.9 0 7.6.8.7.2 1.1.9.9 1.6-.2.6-.7 1-1.2 1zm-10.2 9.7c-.5 0-1-.3-1.2-.8-.8-2.1-1.2-4.3-1.3-6.6 0-.7.5-1.3 1.2-1.3s1.3.5 1.3 1.2c.1 2 .5 3.9 1.1 5.8.2.7-.1 1.4-.8 1.6 0 .1-.2.1-.3.1zm-12-6.1c-.4 0-.8-.2-1-.5-.4-.6-.3-1.4.2-1.8 1.8-1.4 3.7-2.6 5.8-3.6.6-.3 1.4 0 1.7.6.3.6 0 1.4-.6 1.7-1.9.9-3.7 2-5.3 3.3-.2.2-.5.3-.8.3zm6.4-9.1c-.5 0-.9-.3-1.2-.7-.5-1-1.2-1.9-2.4-3.4-.3-.4-.7-.9-1.1-1.4-.4-.6-.3-1.4.2-1.8.6-.4 1.4-.3 1.8.2.4.5.8 1 1.1 1.4 1.3 1.6 2.1 2.6 2.7 3.9.3.6 0 1.4-.6 1.7-.1.1-.3.1-.5.1zm6.2-.3c-.3 0-.5-.1-.8-.2-.6-.4-.7-1.2-.3-1.8 1.2-1.7 2.3-3.4 3.3-5.2.3-.6 1.1-.9 1.7-.5.6.3.9 1.1.5 1.7-1 1.9-2.2 3.8-3.5 5.6-.2.2-.5.4-.9.4zm310 196.4c-1.4 0-2.9-.2-4.5-.7-8.4-2.7-16.6-12.7-18.7-20-.4-1.4-.7-2.9-.9-4.4-8.1 3.3-15.5 10.6-15.4 21 0 1.5-1.2 2.7-2.7 2.8-1.5 0-2.7-1.2-2.7-2.7-.1-6.7 2.4-12.9 7-18 3.6-4 8.4-7.1 13.7-8.8.5-6.5 3.1-12.9 7.4-17.4 7-7.4 18.2-8.9 27.3-10.1l.7-.1c1.5-.2 2.9.9 3.1 2.3.2 1.5-.9 2.9-2.3 3.1l-.7.1c-8.6 1.2-18.4 2.5-24 8.4-3 3.2-5 7.7-5.7 12.4 7.9-1 17.7 1.3 24.3 5.7 4.3 2.9 7.1 7.8 7.2 12.7.2 4.3-1.7 8.3-5.2 11.1-2.4 1.6-5 2.6-7.9 2.6zm-18.7-26.7c.1 1.5.4 3 .8 4.4 1.7 5.8 8.7 14.2 15.1 16.3 2.8.9 5.1.5 7.2-1.1 2.7-2.1 3.2-4.8 3.1-6.6-.1-3.2-2-6.4-4.8-8.3-5.7-3.9-14.7-5.8-21.4-4.7z'/%3E%3C/g%3E%3C/svg%3E");
}

.c-services {
  display: grid;
  grid-gap: var(--s2);
  margin: 0 calc(var(--s3) * -1);
  padding: var(--s6) var(--s3);
  position: relative;
  z-index: 1;
}




nav {
  position: fixed;
  z-index: 999;
  width: 100%;
  height: 50px;
  line-height: 70px;
  margin-top: -15px;
}
nav .mini {
  position: fixed;
  background: #fff;
  padding: 40px;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.2s ease 0.2s;
}


.row {
  width: 100%;
  justify-content: flex-start;
  display: flex;

}

.product, .product--pink, .product--yellow, .product--green, .product--red, .product--orange, .product--blue {
  box-shadow: 1px 5px 15px #ccc;
  width: 15em;
  height: auto;
  border-radius: 3px;
  padding: 2em;
  margin: 1em;
  overflow: hidden;
  position: relative;
  flex: auto;
}
.product--blue {
  background: linear-gradient(8deg, #92dce5 50%, rgba(255, 255, 255, 100%) 50%);
}
.product--orange {
  background: linear-gradient(8deg, #ef6f6c 50%, rgba(255, 255, 255, 100%) 50%);
}
.product--red {
  background: linear-gradient(8deg, #e84855 50%, rgba(255, 255, 255, 100%) 50%);
}
.product--green {
  background: linear-gradient(8deg, #70c1b3 50%, rgba(255, 255, 255, 100%) 50%);
}
.product--yellow {
  background: linear-gradient(8deg, #e8db7d 50%, rgba(255, 255, 255, 100%) 50%);
}
.product--pink {
  background: linear-gradient(8deg, #ff386d 50%, rgba(255, 255, 255, 100%) 50%);
}

.product img, .product--blue img, .product--orange img, .product--red img, .product--green img, .product--yellow img, .product--pink img {
  max-width: 100%;
  height: auto !important;
  text-align: center;
}
.product_inner {
  display: flex;
  align-items: center;
  flex-flow: column wrap;
}
.product_inner p {
  color: black;
  margin-top: 10%;
}
.product_inner button {
  border: 1px solid rgba(255, 255, 255, 0.5);
  color: black;
  border-radius: 3px;
  padding: 1em 3em;
  margin: 1em 0 0 0;
  background: none;
  cursor: pointer;
  transition: background ease-in 0.25s;
}
.product_inner button:hover {
  background: white;
  color: #2b2d42;
}
.product_inner button:before {
  font-family: FontAwesome;
  color: black;
  position: absolute;
  font-size: 1.5em;
  margin: 0 -1.5em;
}
.product_inner button:hover:before {
  color: #2b2d42;
}
.product_overlay {
  background: rgba(255, 255, 255, 0.9);
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  transform: translateY(-500px);
  opacity: 0;
  display: flex;
  flex-flow: column wrap;
  justify-content: center;
  align-items: center;
}
.product_overlay h2 {
  color: rgba(43, 45, 66, 0.7);
  font-size: 1.2em;
  margin: 1em 0;
}
.product_overlay i {
  color: rgba(43, 45, 66, 0.7);
  font-size: 1.5em;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}


#lateral{
    float: left;
    display: none;
    width: 40%;

}

#lateral .block_aside{
    display: block;
    width: 90%;

}

#central{
    width: 100%;
    float: left;
}


</style>



<body>

<nav>
  <div class='fas fa-cart-arrow-down' style="float: right; padding: 1em; overflow: hidden; margin-right: 90px; font-size: 20px; color:#fff; box-shadow: 0 1px 6px #fff;">
    <span class='counter' style="padding: 5px;">No items yet!</span><span style="padding: 1px;">$</span>
  </div>
</nav>

    <div class="c-section">
        <h2 class="c-section__title"><span style="margin-left: 32%; margin-top:5%;">Web Merchant</span></h2>
        <aside id="lateral" style="margin-top: -5%;">

        <div>

            <h2>Shopping Cart</h2>

                  <table id="cart">
                    <tr>
                      <th>Descripción</th>
                      <th><center>Qty</center></th>
                      <th><center>$</center></th>
                      <th></th>
                    </tr>
                    </table>
                    <div id='total_pagar' style="border: solid; border-color: #E1E1E1; float: right; padding: 10px;"></div>
        </div>

        </aside>
        <div id="central">
        <strong><div class='row'>
        <div class='product--blue'>
            <div class='product_inner'>
            <img src='./bitcoin.png' width='150'>
              <p>Producto 1</p>
              <p>Price $: <span id="price_p1">50</span></p>
              <button id="p1"><i class='fas fa-cart-arrow-down' style="padding-right: 10px;"></i>Add to Car</button>
            </div>
            <div class='product_overlay'>
              <h2>Added to Car</h2>
              <i class='fa fa-check'></i>
            </div>
          </div>
          <div class='product--orange'>
            <div class='product_inner'>
            <img src='./bitcoin.png' width='150'>
              <p>Producto 2</p>
              <p>Price $: <span id="price_p2">60</span></p>
              <button id="p2"><i class='fas fa-cart-arrow-down' style="padding-right: 10px;"></i>Add to Car</button>
            </div>
            <div class='product_overlay'>
              <h2>Added to Car</h2>
              <i class='fa fa-check'></i>
            </div>
          </div>
          <div class='product--red'>
            <div class='product_inner'>
            <img src='./bitcoin.png' width='150'>
              <p>Producto 3</p>
              <p>Price $: <span id="price_p3">80</span></p>
              <button id="p3"><i class='fas fa-cart-arrow-down' style="padding-right: 10px;"></i>Add to Car</button>
            </div>
            <div class='product_overlay'>
              <h2>Added to Car</h2>
              <i class='fa fa-check'></i>
            </div>
          </div>
          <div class='product--green'>
            <div class='product_inner'>
              <img src='./bitcoin.png' width='150'>
              <p>Producto 4</p>
              <p>Price $: <span id="price_p4">30</span></p>
              <button id="p4"><i class='fas fa-cart-arrow-down' style="padding-right: 10px;"></i>Add to Car</button>
            </div>
            <div class='product_overlay'>
              <h2>Added to Car</h2>
              <i class='fa fa-check'></i>
            </div>
          </div>
        </div></strong>
      </div>

    </div>



    <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog modal-fullscreen-md-down">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Modal Heading</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            Modal body..
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>



</body>

<script>

  $(document).ready(function(){

  var init = "No items yet!";
  var counter= 0;
  var cant1= 0;
  var cant2= 0;
  var cant3= 0;
  var cant4= 0;
  var subtP1=0;
  var subtP2=0;
  var subtP3=0;
  var subtP4=0;


  // Add Items To Basket
  function addToBasket(counter) {

    $(".counter").html(counter);
    $("#total_pagar").html("<button type='button' class='btn btn-success btn-lg' data-bs-toggle='modal' data-bs-target='#myModal'>Pay " + counter +"$" + "</button>")

  }

  $(document).on('click','#eliminarP1',function(){
    $("#produc1").remove();
    counter-=subtP1;
    addToBasket(counter);
    cant1= 0;
  });
  $(document).on('click','#eliminarP2',function(){
    $("#produc2").remove();
    counter-=subtP2;
    addToBasket(counter);
    cant2= 0;
  });
  $(document).on('click','#eliminarP3',function(){
    $("#produc3").remove();
    counter-=subtP3;
    addToBasket(counter);
    cant3= 0;
  });
  $(document).on('click','#eliminarP4',function(){
    $("#produc4").remove();
    counter-=subtP4;
    addToBasket(counter);
    cant4= 0;
  });

  // Add To Basket Animation
  $("#p1").on("click", function () {
    var counter_tx_p1= $("#price_p1").text();
    var counter_p1= parseInt(counter_tx_p1);
    cant1++;
    $("#lateral").css("display", "block");
    if(cant1 >= 2){
      $("#produc1").remove();
    }
    subtP1=counter_p1*cant1;
    $("#cart").append("<tr id='produc1'><td>Producto 1</td><td><center>"+cant1+"</center></td><td><center>"+ subtP1 +"</center></td><center><td><center><i class='fa fa-times-circle-o' id='eliminarP1'></i></center></td></tr>");

    counter+=counter_p1;
    addToBasket(counter);
    $(this)
      .parent()
      .find(".product_overlay")
      .css({
        transform: " translateY(0px)",
        opacity: "1",
        transition: "all ease-in-out .45s"
      })
      .delay(1500)
      .queue(function () {
        $(this)
          .css({
            transform: "translateY(-500px)",
            opacity: "0",
            transition: "all ease-in-out .45s"
          })
          .dequeue();
      });
  });

  $("#p2").on("click", function () {
    var counter_tx_p2= $("#price_p2").text();
    var counter_p2= parseInt(counter_tx_p2);
    cant2++;
    $("#lateral").css("display", "block");
    if(cant2 >= 2){
      $("#produc2").remove();
    }
    subtP2=counter_p2*cant2;
    $("#cart").append("<tr id='produc2'><td>Producto 2</td><td><center>"+cant2+"</center></td><td><center>"+ subtP2 +"</center></td><td><center><i class='fa fa-times-circle-o' id='eliminarP2'></i></center></td></tr>");

    counter+=counter_p2;
    addToBasket(counter);
    $(this)
      .parent()
      .parent()
      .find(".product_overlay")
      .css({
        transform: " translateY(0px)",
        opacity: "1",
        transition: "all ease-in-out .45s"
      })
      .delay(1500)
      .queue(function () {
        $(this)
          .css({
            transform: "translateY(-500px)",
            opacity: "0",
            transition: "all ease-in-out .45s"
          })
          .dequeue();
      });
  });

  $("#p3").on("click", function () {
    var counter_tx_p3= $("#price_p3").text();
    var counter_p3= parseInt(counter_tx_p3);
    cant3++;
    $("#lateral").css("display", "block");
    if(cant3 >= 2){
      $("#produc3").remove();
    }
    subtP3=counter_p3*cant3;
    $("#cart").append("<tr id='produc3'><td>Producto 3</td><td><center>"+cant3+"</center></td><td><center>"+ subtP3 +"</center></td><center><td><center><i class='fa fa-times-circle-o' id='eliminarP3'></i></center></td></tr>");

    counter+=counter_p3;
    addToBasket(counter);
    $(this)
      .parent()
      .parent()
      .find(".product_overlay")
      .css({
        transform: " translateY(0px)",
        opacity: "1",
        transition: "all ease-in-out .45s"
      })
      .delay(1500)
      .queue(function () {
        $(this)
          .css({
            transform: "translateY(-500px)",
            opacity: "0",
            transition: "all ease-in-out .45s"
          })
          .dequeue();
      });
  });

  $("#p4").on("click", function () {
    var counter_tx_p4= $("#price_p4").text();
    var counter_p4= parseInt(counter_tx_p4);
    cant4++;
    $("#lateral").css("display", "block");
    if(cant4 >= 2){
      $("#produc4").remove();
    }
    subtP4=counter_p4*cant4;
    $("#cart").append("<tr id='produc4'><td>Producto 4</td><td><center>"+cant4+"</center></td><td><center>"+ subtP4 +"</center></td><center><td><center><i class='fa fa-times-circle-o' id='eliminarP4'></i></center></td></tr>");

    counter+=counter_p4;
    addToBasket(counter);
    $(this)
      .parent()
      .parent()
      .find(".product_overlay")
      .css({
        transform: " translateY(0px)",
        opacity: "1",
        transition: "all ease-in-out .45s"
      })
      .delay(1500)
      .queue(function () {
        $(this)
          .css({
            transform: "translateY(-500px)",
            opacity: "0",
            transition: "all ease-in-out .45s"
          })
          .dequeue();
      });
  });
});


</script>
</html>
