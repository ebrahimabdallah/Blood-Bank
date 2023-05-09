  {{-- loader --}}
  <!DOCTYPE html>
<html>
  <head>
    <style>
      #overlay {
        width: 100%;
        height: 100%;
        position: fixed;
         
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 9998;
      }
      
      #loader {
        width: 70px;
        
        height: 70px;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
      }
      
      path, rect {
        animation: move 1s ease-in-out infinite;
      }
      
      @keyframes move {
        0% {
          transform: translate(0, 0);
        }
        25% {
          transform: translate(25px, 0);
        }
        50% {
          transform: translate(25px, 25px);
        }
        75% {
          transform: translate(0, 25px);
        }
        100% {
          transform: translate(0, 0);
        }
      }
      
      path {
        stroke-dasharray: 169;
        stroke-dashoffset: 169;
        animation: dash 2s ease-in-out infinite, color 6s ease-in-out infinite;
      }
      
      @keyframes dash {
        0% {
          stroke-dashoffset: 169;
        }
        50% {
          stroke-dashoffset: 0;
        }
        100% {
          stroke-dashoffset: -169;
        }
      }
      
      @keyframes color {
        50% {
          stroke: #f00;
        }
        25% {
          stroke: #ff0;
        }
        50% {
          stroke: #0f0;
        }
        75% {
          stroke: #0ff;
        }
        100% {
          stroke: #f00;
        }
      }
    </style>
  </head>
  <body>
    <div id="overlay"></div>
    <div id="loader">
      <svg viewBox="0 0 70 70">
        <rect x="5" y="5" width="30" height="30" fill="#f00">
          <animate attributeName="x" from="5" to="35" dur="1s" repeatCount="indefinite"/>
        </rect>
        <rect x="35" y="5" width="30" height="30" fill="#0f0">
          <animate attributeName="y" from="5" to="35" dur="1s" repeatCount="indefinite"/>
        </rect>
        <rect x="35" y="35" width="30" height="30" fill="#00f">
          <animate attributeName="x" from="65" to="35" dur="1s" repeatCount="indefinite"/>
        </rect>
        <rect x="5" y="35" width="30" height="30" fill="#ff0">
          <animate attributeName="y" from="65" to="35" dur="1s" repeatCount="indefinite"/>
        </rect>
      </svg>
    </div>
    
    <script>
      // Set a delay for showing the loader
      setTimeout(function() {
        document.getElementById("overlay").style.display = "none";
        document.getElementById("loader").style.display = "none";
      }, 3000); // Hide the loader after 3 seconds
    </script>
  </body>
</html>
  {{-- loader --}}