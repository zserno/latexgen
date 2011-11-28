<?php
/**
 * @file
 *  LaTeX template file.
 */
?>
% !TEX encoding = UTF-8 Unicode
%% LaTeX Preamble - Common packages
\usepackage{helvetica} % uses helvetica postscript font (download helvetica.sty)
\usepackage[scaled=0.92]{helvet}
\usepackage[utf8x]{inputenc} % Any characters can be typed directly from the keyboard, eg éçñ
\usepackage[T1]{fontenc}
\usepackage{graphicx}  % Add graphics capabilities
\usepackage[none]{hyphenat}

\begin{document}

<?php
  echo check_plain($node->title);
?>

\end{document}
