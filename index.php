<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'Book Shop';
								}
							?>
							</h1>
							<div class="entry">
								<br>
								<p>
								“Will the day come where there are no more secondhand bookshops?” the poet, essayist, and bookseller Marius Kociejowski asks in his new memoir, “A Factotum in the Book Trade.” He suspects that such a day will not arrive, but, troublingly, he is unsure. In London, his adopted home town and a great hub ofthe antiquarian book trade, many of Kociejowski’s haunts—including his former employer, the famed Bertram Rota shop, a pioneer in the trade of first editions of modern books and “one of the last of the old establishments, dynastic and oxygenless, with a hierarchy that could be more or less described as Victorian”—have already fallen prey to rising rents and shifting winds. Kociejowski dislikes the fancy, well-appointed bookstores that have sometimes taken their place. “I want chaos; I want, above all, mystery,” he writes. The best bookstores, precisely because of the dustiness of their back shelves and even the crankiness of their guardians, promise that “somewhere, in one of their nooks and crannies, there awaits a book that will ever so subtly alter one’s existence.” With every shop that closes, a bit of that life-altering power is lost and the world leaches out “more of the serendipity which feeds the human spirit.”
								
								</p>
								<br>		
								
								<object width="550" height="400">
								<!--<param name="movie" value="somefilename.swf">-->
								<embed src="HotHotSoftware3DMenu.swf" width="550" height="400">
								</embed>
								</object>
								<br><br>
								<p>
								Kociejowski writes from the “ticklish underbelly” of the book trade as a “factotum” rather than a book dealer, since he was always too busy with writing to ever run a store. His memoir is a representative slice, a core sample, of the rich and partly vanished world of bookselling in England from the late nineteen-seventies to the present. As Larry McMurtry puts it, in his own excellent (and informative) memoir of life as a bookseller, “Books,” “the antiquarian book trade is an anecdotal culture,” rich with lore of the great and eccentric sellers and collectors who animate the trade. Kociejowski writes how “the multifariousness of human nature is more on show” in a bookstore than in any other place, adding, “I think it’s because of books, what they are, what they release in ourselves, and what they become when we make them magnets to our desires.”

								</p>
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
