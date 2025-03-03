<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GainHabits | Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style/dashboard.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <select>
                <option value="" disabled selected>Select your habit</option>
                <option value="exercise">Exercise</option>
                <option value="reading">Reading</option>
                <option value="meditation">Meditation</option>
                <option value="english">English Speaking</option>
                <option value="french">French Speaking</option>
                <option value="arabic">Arabic Speaking</option>
            </select>
            <div class="actions">
                <a href="profile.php" class="btn-user">
                    <i class="fa-solid fa-user"></i>
                </a>
                <button class="btn-add">
                    <i class="fas fa-plus"></i>
                    Add Habit
                </button>
            </div>
        </div>

        <h2>March 2025</h2>
        <table>
            <thead>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td>1</td><td>2</td>
                </tr>
                <tr>
                    <td>3</td><td class="completed">4</td><td class="completed">5</td><td>6</td><td>7</td><td>8</td><td>9</td>
                </tr>
                <tr>
                    <td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td>
                </tr>
                <tr>
                    <td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td>
                </tr>
                <tr>
                    <td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td>
                </tr>
                <tr>
                    <td>31</td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>