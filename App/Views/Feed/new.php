
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SQuora</title>
  <link rel="icon" type="image/x-icon" href="/image/SQuora.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/css/feed.css">
</head>
<body>
  <header>
    <div class="container">
      <nav class="flex-justify-between">
        <div class="head-left">
          <a href="/Feed/view"><img src="/image/SQuora.png" alt="logo"></a>
        </div>
        <div class="head-right">
          <a href="/Userprofile/create"><i class="fa-solid fa-user"></i></a>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <div class="container">
      <section class="feed-questions">
        <form action="/Feed/create" method="POST">
          <label for="question_title">Question Title:</label><br>
          <input type="text" id="question_title" name="question_title"><br><br>
          <label for="question_description">Question Description:</label><br>
          <textarea id="question_description" name="question_description"></textarea><br><br>
          <label for="question_interest">Interest</label>
              <select id="question_interest" name="question_interest" required>
                <option value="science">Science</option>
                <option value="technology">Technology</option>
                <option value="entertainment">Entertainment</option>
              </select><br><br>
          <div class="flex-justify-centre">
            <button class="ask-question" type="submit">Ask Question</button>
          </div>
        </form>
      </section>
      <section class="feed-display">
        <!-- <a href="/Feed/view">View Question</a> -->
		    <button><a href="/Feed/view">View Question</a></button>
      </section>
    </div>
  </main>
</body>
</html>