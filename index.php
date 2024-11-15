<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculus</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/boxicons/2.0.7/css/boxicons.min.css">
</head>

<body>
    <div class="container">
        <h1>Exam Preparation</h1>

        <p>Select a option :</p>

        <button onclick="interpolation()">Interpolation</button><br>
        <button onclick="gauss()">Gauss Linear Equation</button><br>
        <button onclick="correlate()">Correlation</button><br>
        <button onclick="ni()">Numerical Integration</button><br>
        <button onclick="gr()">Gauss Rank of Matrix</button><br>
        <button onclick="le()">Linear Equation Gauss Elimination</button><br>
        <button onclick="ji()">Gauss Jordan Elimination or Inverse Method</button><br>
    </div>

    <footer class="footer">
        <div style="display: flex; justify-content: space-between;">
            <div>
                <br>
                <a class="footer__copy" style="margin-left: 20px;">Harshal Gondaliya<sup>&reg;</sup></a>
            </div>
            <div style="text-align: right;">
                <br>
                <a class="footer__info" style="margin-right: 20px;">+91 8511257368</a><br><br><br>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <div>
                <a class="footer__copy" style="margin-left: 20px;">Since 2022. All rights reserved</a>
            </div>
            <div class="footer__social">
                <div>
                    <a href="https://www.linkedin.com/in/harshalgondaliya/" class="home__social-icon" style="color: #0092E0;">
                        <i class='bx bxl-linkedin'></i>
                    </a>
                    <a href="https://www.instagram.com/harshal_gondaliya/" class="home__social-icon" style="color: #E4405F;">
                        <i class='bx bxl-instagram'></i>
                    </a>
                    <a href="https://github.com/harshalgondaliya" class="home__social-icon" style="color: #000000;">
                        <i class='bx bxl-github'></i>
                    </a><br>
                </div>
            </div>
            <div style="text-align: right;">
                <a class="footer__info" style="margin-right: 20px;">harshalgondaliya07@gmail.com</a><br>
            </div>
        </div>
    </footer>

    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <script>
        function interpolation() {
            var topic = prompt("Choose a topic for Linear Algebra:\n1. Newton Interpolation\n2. Newton Divided Difference\n3. Lagrange's Interpolation");
            if (topic !== null) {
                switch (topic) {
                    case "1":
                        window.location.href = "1.Newton_interpolation/newton_interpolation.php";
                        break;
                    case "2":
                        window.location.href = "1.Newton_Divided_Difference/newton_divided.php";
                        break;
                    case "3":
                        window.location.href = "1.Lagrange/Lagrange.php";
                        break;
                    default:
                        alert("Invalid choice. Please select a valid topic.");
                        break;
                }
            }
        }

        function gauss() {
            var topic = prompt("Choose a topic for Linear Algebra:\n1. Gauss Jacobi Method\n2. Gauss Seidal Method");
            if (topic !== null) {
                switch (topic) {
                    case "1":
                        window.location.href = "2.Gauss/gauss_jacobi.php";
                        break;
                    case "2":
                        window.location.href = "2.Gauss/gauss_seidal.php";
                        break;
                    default:
                        alert("Invalid choice. Please select a valid topic.");
                        break;
                }
            }
        }

        function correlate() {
            var topic = prompt("Choose a topic for Linear Algebra:\n1. Karl Pearson's Coefficient of Correlation\n2. Spearman's Rank Correlation Coefficient");
            if (topic !== null) {
                switch (topic) {
                    case "1":
                        window.location.href = "3.Coorelation/kp.php";
                        break;
                    case "2":
                        window.location.href = "3.Coorelation/sr.php";
                        break;
                    default:
                        alert("Invalid choice. Please select a valid topic.");
                        break;
                }
            }
        }

        function ni() {
            var topic = prompt("Choose a topic for Linear Algebra:\n1. The Trapezoidal Rule\n2. The Simpson's 1/3 Rule\n3. The Simpson's 3/8 Rule");
            if (topic !== null) {
                switch (topic) {
                    case "1":
                        window.location.href = "4.Numerical_Integration/tr.php";
                        break;
                    case "2":
                        window.location.href = "4.Numerical_Integration/si1.php";
                        break;
                    case "3":
                        window.location.href = "4.Numerical_Integration/si2.php";
                        break;
                    default:
                        alert("Invalid choice. Please select a valid topic.");
                        break;
                }
            }
        }

        function gr() {
            window.location.href = "5.Gauss_Rank/r.php";
        }

        function le() {
            window.location.href = "6.Elimination/el.php";
        }

        function ji() {
            var topic = prompt("Choose a topic for Linear Algebra:\n1. The Gauss Linear Jordan Elimination\n2. The Gauss Inverse Jordan Elimination");
            if (topic !== null) {
                switch (topic) {
                    case "1":
                        window.location.href = "7.Inverse/LJE.php";
                        break;
                    case "2":
                        window.location.href = "7.Inverse/IJE.php";
                        break;
                    default:
                        alert("Invalid choice. Please select a valid topic.");
                        break;
                }
            }
        }
    </script>

</body>

</html>
