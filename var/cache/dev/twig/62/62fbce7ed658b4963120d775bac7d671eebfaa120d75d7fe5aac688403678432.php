<?php

/* base.html.twig */
class __TwigTemplate_cbffd16ca21ee3f6854f76301daad7786e63c6eb8692fd925e70dd08a1ec44ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'headscript' => array($this, 'block_headscript'),
            'topbar' => array($this, 'block_topbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b312a641078a54532d93ac615bf15e3fe2ca7fd3df94540848136b7a29b1bb89 = $this->env->getExtension("native_profiler");
        $__internal_b312a641078a54532d93ac615bf15e3fe2ca7fd3df94540848136b7a29b1bb89->enter($__internal_b312a641078a54532d93ac615bf15e3fe2ca7fd3df94540848136b7a29b1bb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 16
        $this->displayBlock('headscript', $context, $blocks);
        // line 26
        echo "    </head>
    <body>
        ";
        // line 28
        $this->displayBlock('topbar', $context, $blocks);
        // line 62
        echo "
        ";
        // line 63
        $this->displayBlock('sidebar', $context, $blocks);
        // line 132
        echo "
        <div class=\"wrapper\">
            <div class=\"container white-shadow\" style=\"padding-top: 10px;\">
                ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 137
            echo "                    <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 138
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 142
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 143
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 147
            echo "                    <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 148
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 152
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 153
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
                ";
        // line 156
        $this->displayBlock('body', $context, $blocks);
        // line 159
        echo "            </div>
        </div>
        ";
        // line 161
        $this->displayBlock('javascripts', $context, $blocks);
        // line 162
        echo "    </body>
</html>";
        
        $__internal_b312a641078a54532d93ac615bf15e3fe2ca7fd3df94540848136b7a29b1bb89->leave($__internal_b312a641078a54532d93ac615bf15e3fe2ca7fd3df94540848136b7a29b1bb89_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbc45ad3a11d34a642f1655e229c10cad69549467d04aaa3e0ea888097e61e0d = $this->env->getExtension("native_profiler");
        $__internal_fbc45ad3a11d34a642f1655e229c10cad69549467d04aaa3e0ea888097e61e0d->enter($__internal_fbc45ad3a11d34a642f1655e229c10cad69549467d04aaa3e0ea888097e61e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NSZ";
        
        $__internal_fbc45ad3a11d34a642f1655e229c10cad69549467d04aaa3e0ea888097e61e0d->leave($__internal_fbc45ad3a11d34a642f1655e229c10cad69549467d04aaa3e0ea888097e61e0d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_300d9dff5d565f5d6ab777b604e78f3c6dc7c76dcd26d34d8260478f6d3df3d5 = $this->env->getExtension("native_profiler");
        $__internal_300d9dff5d565f5d6ab777b604e78f3c6dc7c76dcd26d34d8260478f6d3df3d5->enter($__internal_300d9dff5d565f5d6ab777b604e78f3c6dc7c76dcd26d34d8260478f6d3df3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui.theme.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui.structure.min.css"), "html", null, true);
        // line 12
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_300d9dff5d565f5d6ab777b604e78f3c6dc7c76dcd26d34d8260478f6d3df3d5->leave($__internal_300d9dff5d565f5d6ab777b604e78f3c6dc7c76dcd26d34d8260478f6d3df3d5_prof);

    }

    // line 16
    public function block_headscript($context, array $blocks = array())
    {
        $__internal_afe8edd1bf08e0fbab22819b5f6687e1492a5b5bc5e1230b214bc744856e3b38 = $this->env->getExtension("native_profiler");
        $__internal_afe8edd1bf08e0fbab22819b5f6687e1492a5b5bc5e1230b214bc744856e3b38->enter($__internal_afe8edd1bf08e0fbab22819b5f6687e1492a5b5bc5e1230b214bc744856e3b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headscript"));

        // line 17
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.2.3.min.js"), "html", null, true);
        // line 18
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/Chart.min.js"), "html", null, true);
        // line 20
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ChartBundle.min.js"), "html", null, true);
        // line 22
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        // line 24
        echo "\"></script>
        ";
        
        $__internal_afe8edd1bf08e0fbab22819b5f6687e1492a5b5bc5e1230b214bc744856e3b38->leave($__internal_afe8edd1bf08e0fbab22819b5f6687e1492a5b5bc5e1230b214bc744856e3b38_prof);

    }

    // line 28
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_c3b0a5fa4d30d7a4dc589f09f4a930fc52c0df959f16ebd964b01d318ebb4fff = $this->env->getExtension("native_profiler");
        $__internal_c3b0a5fa4d30d7a4dc589f09f4a930fc52c0df959f16ebd964b01d318ebb4fff->enter($__internal_c3b0a5fa4d30d7a4dc589f09f4a930fc52c0df959f16ebd964b01d318ebb4fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 29
        echo "        <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <img class =\"navbar-brand\" alt=\"Brand\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoaigle.png"), "html", null, true);
        echo "\" >
                <a class=\"navbar-brand\" href=\"#\">National Security Zero</a>
                <p class=\"navbar-text\">La sécurité avant tout, mais avant apéro !</p>

            </div>
            <div id=\"navbar\" class=\"nav navbar-collapse collapse\">
                <div class=\"nav navbar-right navbar-correct\">

                    ";
        // line 45
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 46
            echo "                        <img alt=\"Brand\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "salarie", array()), "img", array()))), "html", null, true);
            // line 48
            echo "\">
                    <a class=\"btn btn-default navbar-btn btn-sm\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute(            // line 50
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"
                       role=\"button\">Profil</a>
                    <a class=\"btn btn-default navbar-btn btn-sm\" href=\"/logout\"
                       role=\"button\">Logout</a>
                    ";
        } else {
            // line 55
            echo "                    <a class=\"btn btn-default navbar-btn btn-sm\" href=\"/login\"
                       role=\"button\">Login</a>
                    ";
        }
        // line 58
        echo "                </div>
            </div><!--/.nav-collapse -->
        </nav>
        ";
        
        $__internal_c3b0a5fa4d30d7a4dc589f09f4a930fc52c0df959f16ebd964b01d318ebb4fff->leave($__internal_c3b0a5fa4d30d7a4dc589f09f4a930fc52c0df959f16ebd964b01d318ebb4fff_prof);

    }

    // line 63
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ae24a88781877fc8774e4aacc1154f0fc98667ca42fe148e07f15b78260351f2 = $this->env->getExtension("native_profiler");
        $__internal_ae24a88781877fc8774e4aacc1154f0fc98667ca42fe148e07f15b78260351f2->enter($__internal_ae24a88781877fc8774e4aacc1154f0fc98667ca42fe148e07f15b78260351f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 64
        echo "            <div class=\"sidebar\">
                <div class=\"s-container\">
                    <ul>
                        <li ><a href=\"/\" class=\"menu-selected\"><i
                                        class=\"glyphicon glyphicon-home\"></i>Accueil</a></li>
                        <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"glyphicon glyphicon-education\"></i>Formations</a></li>
                        <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-th-list\"></i>Forum</a></li>
                        <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("dossiers");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-folder\"></i>Fichiers</a></li>
                        <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("annuaireempty");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-users\"></i>Annuaire</a></li>
                        <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("stats");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-area-chart\"></i>Statistiques</a></li>
                    </ul>
                    <hr>
                    <div class=\"panel\">
                        <p class=\"s-title\">les chiffres clés</p>


                        <ul>
                            <li><span class=\"label label-primary\">";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbUsers", array(), "method"), "html", null, true);
        echo "</span>
                                Employés  </li>
                            <li><span class=\"label label-primary\">";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbFiles", array(), "method"), "html", null, true);
        echo "</span>
                                Documents partagés</li>
                            <li><span class=\"label label-primary\">";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbFormations", array(), "method"), "html", null, true);
        // line 100
        echo "</span>
                                Formations</li>
                            <li><span class=\"label label-primary\">";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbReplies", array()), "html", null, true);
        // line 103
        echo "</span>
                                 Réponses Forum</li>
                        </ul>


                    </div>
                    <div class=\"panel\">
                        <p class=\"s-title\">Top 5 des membres</p>

                        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getTop5", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 113
            echo "                        <div class=\"s-people\">
                            <img src=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "img", array()))), "html", null, true);
            echo "\"
                                 alt=\"img\">
                            <div class=\"s-people-desc\">
                                <div>
                                    <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute(            // line 119
$context["user"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["user"], "username", array())), "html", null, true);
            echo "</a>
                                    <span>(";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo ")</span>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                    </div>

                    <hr>
                </div>

            </div>
        ";
        
        $__internal_ae24a88781877fc8774e4aacc1154f0fc98667ca42fe148e07f15b78260351f2->leave($__internal_ae24a88781877fc8774e4aacc1154f0fc98667ca42fe148e07f15b78260351f2_prof);

    }

    // line 156
    public function block_body($context, array $blocks = array())
    {
        $__internal_51ebc971696c0c016b3784d07ef45aae7f42ccbfefecca4884421bf0a8560a95 = $this->env->getExtension("native_profiler");
        $__internal_51ebc971696c0c016b3784d07ef45aae7f42ccbfefecca4884421bf0a8560a95->enter($__internal_51ebc971696c0c016b3784d07ef45aae7f42ccbfefecca4884421bf0a8560a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 157
        echo "
                ";
        
        $__internal_51ebc971696c0c016b3784d07ef45aae7f42ccbfefecca4884421bf0a8560a95->leave($__internal_51ebc971696c0c016b3784d07ef45aae7f42ccbfefecca4884421bf0a8560a95_prof);

    }

    // line 161
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d09da54bd73e9b8517c9bc390c8a72757ba2e38d112763cccc0ab0aae42915f5 = $this->env->getExtension("native_profiler");
        $__internal_d09da54bd73e9b8517c9bc390c8a72757ba2e38d112763cccc0ab0aae42915f5->enter($__internal_d09da54bd73e9b8517c9bc390c8a72757ba2e38d112763cccc0ab0aae42915f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d09da54bd73e9b8517c9bc390c8a72757ba2e38d112763cccc0ab0aae42915f5->leave($__internal_d09da54bd73e9b8517c9bc390c8a72757ba2e38d112763cccc0ab0aae42915f5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 161,  416 => 157,  410 => 156,  397 => 125,  386 => 120,  380 => 119,  379 => 118,  372 => 114,  369 => 113,  365 => 112,  354 => 103,  352 => 102,  348 => 100,  346 => 99,  341 => 97,  336 => 95,  322 => 84,  315 => 80,  308 => 76,  301 => 72,  295 => 69,  288 => 64,  282 => 63,  272 => 58,  267 => 55,  259 => 50,  258 => 49,  255 => 48,  252 => 46,  250 => 45,  239 => 37,  229 => 29,  223 => 28,  215 => 24,  213 => 23,  210 => 22,  208 => 21,  205 => 20,  203 => 19,  200 => 18,  197 => 17,  191 => 16,  182 => 13,  179 => 12,  177 => 11,  173 => 10,  169 => 9,  165 => 8,  160 => 7,  154 => 6,  142 => 5,  134 => 162,  132 => 161,  128 => 159,  126 => 156,  123 => 155,  116 => 153,  113 => 152,  108 => 150,  101 => 148,  98 => 147,  93 => 145,  86 => 143,  83 => 142,  78 => 140,  71 => 138,  68 => 137,  64 => 135,  59 => 132,  57 => 63,  54 => 62,  52 => 28,  48 => 26,  46 => 16,  41 => 15,  39 => 6,  35 => 5,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}NSZ{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.min.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.theme.min.css') }}">*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset*/
/*             ('css/jquery-ui.structure.min.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% block headscript %}*/
/*             <script type="text/javascript" src="{{ asset('js/jquery-2.2.3.min.js')*/
/*             }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/Chart.min.js')*/
/*             }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/ChartBundle.min.js')*/
/*             }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js')*/
/*             }}"></script>*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block topbar %}*/
/*         <nav class="navbar navbar-default navbar-fixed-top">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <img class ="navbar-brand" alt="Brand" src="{{ asset('img/logoaigle.png') }}" >*/
/*                 <a class="navbar-brand" href="#">National Security Zero</a>*/
/*                 <p class="navbar-text">La sécurité avant tout, mais avant apéro !</p>*/
/* */
/*             </div>*/
/*             <div id="navbar" class="nav navbar-collapse collapse">*/
/*                 <div class="nav navbar-right navbar-correct">*/
/* */
/*                     {% if app.user is not null %}*/
/*                         <img alt="Brand" src="{{ asset('img/users/' ~ app.user*/
/*                         .salarie.img )*/
/*                         }}">*/
/*                     <a class="btn btn-default navbar-btn btn-sm" href="{{ path*/
/*                     ('profiluser', {'id': app.user.id}) }}"*/
/*                        role="button">Profil</a>*/
/*                     <a class="btn btn-default navbar-btn btn-sm" href="/logout"*/
/*                        role="button">Logout</a>*/
/*                     {% else %}*/
/*                     <a class="btn btn-default navbar-btn btn-sm" href="/login"*/
/*                        role="button">Login</a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div><!--/.nav-collapse -->*/
/*         </nav>*/
/*         {% endblock %}*/
/* */
/*         {% block sidebar %}*/
/*             <div class="sidebar">*/
/*                 <div class="s-container">*/
/*                     <ul>*/
/*                         <li ><a href="/" class="menu-selected"><i*/
/*                                         class="glyphicon glyphicon-home"></i>Accueil</a></li>*/
/*                         <li><a href="{{ path('formation') }}"*/
/*                                class="menu-unselected"><i*/
/*                                         class="glyphicon glyphicon-education"></i>Formations</a></li>*/
/*                         <li><a href="{{ path('forum') }}"*/
/*                                class="menu-unselected"><i*/
/*                                         class="fa*/
/*                         fa-th-list"></i>Forum</a></li>*/
/*                         <li><a href="{{ path('dossiers') }}"*/
/*                                class="menu-unselected"><i*/
/*                                         class="fa*/
/*                         fa-folder"></i>Fichiers</a></li>*/
/*                         <li><a href="{{ path('annuaireempty') }}"*/
/*                                class="menu-unselected"><i*/
/*                                         class="fa*/
/*                         fa-users"></i>Annuaire</a></li>*/
/*                         <li><a href="{{ path('stats') }}"*/
/*                                class="menu-unselected"><i*/
/*                                         class="fa*/
/*                         fa-area-chart"></i>Statistiques</a></li>*/
/*                     </ul>*/
/*                     <hr>*/
/*                     <div class="panel">*/
/*                         <p class="s-title">les chiffres clés</p>*/
/* */
/* */
/*                         <ul>*/
/*                             <li><span class="label label-primary">{{ dbInfo.getNbUsers() }}</span>*/
/*                                 Employés  </li>*/
/*                             <li><span class="label label-primary">{{ dbInfo.getNbFiles() }}</span>*/
/*                                 Documents partagés</li>*/
/*                             <li><span class="label label-primary">{{ dbInfo*/
/*                                     .getNbFormations() }}</span>*/
/*                                 Formations</li>*/
/*                             <li><span class="label label-primary">{{ dbInfo*/
/*                                     .getNbReplies }}</span>*/
/*                                  Réponses Forum</li>*/
/*                         </ul>*/
/* */
/* */
/*                     </div>*/
/*                     <div class="panel">*/
/*                         <p class="s-title">Top 5 des membres</p>*/
/* */
/*                         {% for user in dbInfo.getTop5() %}*/
/*                         <div class="s-people">*/
/*                             <img src="{{ asset('img/users/' ~ user.salarie.img ) }}"*/
/*                                  alt="img">*/
/*                             <div class="s-people-desc">*/
/*                                 <div>*/
/*                                     <a href="{{ path*/
/*                                     ('profiluser', {'id': user.id}) }}" >{{ user.username|capitalize }}</a>*/
/*                                     <span>({{ user.email }})</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <hr>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         {% endblock %}*/
/* */
/*         <div class="wrapper">*/
/*             <div class="container white-shadow" style="padding-top: 10px;">*/
/*                 {% for flash_message in app.session.flashbag.get*/
/*                 ('info') %}*/
/*                     <div class="alert alert-info">{{ flash_message*/
/*                         }}</div>*/
/*                 {% endfor %}*/
/*                 {% for flash_message in app.session.flashbag.get*/
/*                 ('success') %}*/
/*                     <div class="alert alert-success">{{ flash_message*/
/*                         }}</div>*/
/*                 {% endfor %}*/
/*                 {% for flash_message in app.session.flashbag.get*/
/*                 ('warning') %}*/
/*                     <div class="alert alert-warning">{{ flash_message*/
/*                         }}</div>*/
/*                 {% endfor %}*/
/*                 {% for flash_message in app.session.flashbag.get*/
/*                 ('danger') %}*/
/*                     <div class="alert alert-danger">{{ flash_message*/
/*                         }}</div>*/
/*                 {% endfor %}*/
/* */
/*                 {% block body %}*/
/* */
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
