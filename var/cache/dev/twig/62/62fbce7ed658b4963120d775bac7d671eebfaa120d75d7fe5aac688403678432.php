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
        $__internal_f22f826e5403dd21e492575ef2d7b1755719cd4443181602391ca680f355ac84 = $this->env->getExtension("native_profiler");
        $__internal_f22f826e5403dd21e492575ef2d7b1755719cd4443181602391ca680f355ac84->enter($__internal_f22f826e5403dd21e492575ef2d7b1755719cd4443181602391ca680f355ac84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 12
        $this->displayBlock('headscript', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('topbar', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        $this->displayBlock('sidebar', $context, $blocks);
        // line 145
        echo "
        <div class=\"wrapper\">
            <div class=\"container white-shadow\" style=\"padding-top: 10px;\">
                ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 150
            echo "                    <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 151
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 155
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 156
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 160
            echo "                    <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 161
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 165
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 166
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "
                ";
        // line 169
        $this->displayBlock('body', $context, $blocks);
        // line 172
        echo "            </div>
        </div>
        ";
        // line 174
        $this->displayBlock('javascripts', $context, $blocks);
        // line 175
        echo "    </body>
</html>";
        
        $__internal_f22f826e5403dd21e492575ef2d7b1755719cd4443181602391ca680f355ac84->leave($__internal_f22f826e5403dd21e492575ef2d7b1755719cd4443181602391ca680f355ac84_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_59c08a4ecf0189cf741907662ff434af3069b6b3abb6108b5bfb95ab4726705d = $this->env->getExtension("native_profiler");
        $__internal_59c08a4ecf0189cf741907662ff434af3069b6b3abb6108b5bfb95ab4726705d->enter($__internal_59c08a4ecf0189cf741907662ff434af3069b6b3abb6108b5bfb95ab4726705d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NSZ";
        
        $__internal_59c08a4ecf0189cf741907662ff434af3069b6b3abb6108b5bfb95ab4726705d->leave($__internal_59c08a4ecf0189cf741907662ff434af3069b6b3abb6108b5bfb95ab4726705d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52f546700ce14d4220e60c635334c8502db2ea51b6556b2a5755f39597b399ed = $this->env->getExtension("native_profiler");
        $__internal_52f546700ce14d4220e60c635334c8502db2ea51b6556b2a5755f39597b399ed->enter($__internal_52f546700ce14d4220e60c635334c8502db2ea51b6556b2a5755f39597b399ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_52f546700ce14d4220e60c635334c8502db2ea51b6556b2a5755f39597b399ed->leave($__internal_52f546700ce14d4220e60c635334c8502db2ea51b6556b2a5755f39597b399ed_prof);

    }

    // line 12
    public function block_headscript($context, array $blocks = array())
    {
        $__internal_3eefffbbadcaf53b3103ee75bb83ab35cdd17b7a7a75f383b65dc81701ec5861 = $this->env->getExtension("native_profiler");
        $__internal_3eefffbbadcaf53b3103ee75bb83ab35cdd17b7a7a75f383b65dc81701ec5861->enter($__internal_3eefffbbadcaf53b3103ee75bb83ab35cdd17b7a7a75f383b65dc81701ec5861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headscript"));

        // line 13
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/Chart.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ChartBundle.js"), "html", null, true);
        // line 15
        echo "\"></script>
        ";
        
        $__internal_3eefffbbadcaf53b3103ee75bb83ab35cdd17b7a7a75f383b65dc81701ec5861->leave($__internal_3eefffbbadcaf53b3103ee75bb83ab35cdd17b7a7a75f383b65dc81701ec5861_prof);

    }

    // line 19
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_4cb445083fc6c9714b643889fe928e59a1e4a132ce5f960421ba4985dcf82ef7 = $this->env->getExtension("native_profiler");
        $__internal_4cb445083fc6c9714b643889fe928e59a1e4a132ce5f960421ba4985dcf82ef7->enter($__internal_4cb445083fc6c9714b643889fe928e59a1e4a132ce5f960421ba4985dcf82ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 20
        echo "        <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <img class =\"navbar-brand\" alt=\"Brand\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoaigle.png"), "html", null, true);
        echo "\" >
                <a class=\"navbar-brand\" href=\"#\">National Security Zero</a>
                <p class=\"navbar-text\">La sécurité avant tout, mais avant apéro !</p>

            </div>
            <div id=\"navbar\" class=\"nav navbar-collapse collapse\">
                <div class=\"nav navbar-right navbar-correct\">
                    <img alt=\"Brand\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/users/default.jpg"), "html", null, true);
        echo "\">
                    ";
        // line 36
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 37
            echo "                    <a class=\"btn btn-default navbar-btn\" href=\"/profile\"
                       role=\"button\">Profil</a>
                    <a class=\"btn btn-default navbar-btn\" href=\"/logout\"
                       role=\"button\">Logout</a>
                    ";
        } else {
            // line 42
            echo "                    <a class=\"btn btn-default navbar-btn\" href=\"/login\"
                       role=\"button\">Login</a>
                    ";
        }
        // line 45
        echo "                </div>
            </div><!--/.nav-collapse -->
        </nav>
        ";
        
        $__internal_4cb445083fc6c9714b643889fe928e59a1e4a132ce5f960421ba4985dcf82ef7->leave($__internal_4cb445083fc6c9714b643889fe928e59a1e4a132ce5f960421ba4985dcf82ef7_prof);

    }

    // line 50
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_18d1ac86e466e3882f06a3e81da60624b77b25aa20e8b65ca17a10d9d9a0e970 = $this->env->getExtension("native_profiler");
        $__internal_18d1ac86e466e3882f06a3e81da60624b77b25aa20e8b65ca17a10d9d9a0e970->enter($__internal_18d1ac86e466e3882f06a3e81da60624b77b25aa20e8b65ca17a10d9d9a0e970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 51
        echo "            <div class=\"sidebar\">
                <div class=\"s-container\">
                    <ul>
                        <li ><a href=\"/\" class=\"menu-selected\"><i
                                        class=\"glyphicon glyphicon-home\"></i>Accueil</a></li>
                        <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"glyphicon glyphicon-education\"></i>Formations</a></li>
                        <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-th-list\"></i>Forum</a></li>
                        <li><a href=\"#\" class=\"menu-unselected\"><i class=\"fa fa-folder\"></i>Fichiers</a></li>
                        <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("annuaireempty");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-users\"></i>Annuaire</a></li>
                        <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("stats");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-area-chart\"></i>Statistiques</a></li>
                        <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-server\"></i>Admin</a></li>
                    </ul>
                    <hr>
                    <div class=\"panel\">
                        <p class=\"s-title\">NSZ en chiffres</p>
                        <ul>
                            <li><span class=\"label label-primary\">2105</span> Employés  </li>
                            <li><span class=\"label label-primary\">36</span> Documents partagés</li>
                            <li><span class=\"label label-primary\">1</span> Balance</li>
                            <li><span class=\"label label-primary\">51</span> Formations</li>
                            <li><span class=\"label label-primary\">12</span> Admin/RH</li>
                        </ul>
                    </div>
                    <div class=\"panel\">
                        <p class=\"s-title\">Annuaire</p>
                        <div class=\"s-people\">
                            <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/users/default.jpg"), "html", null, true);
        echo "\"
                                 alt=\"Ace\">
                            <div class=\"s-people-desc\">
                                <div>
                                    <a href=\"#\" >Ace Ventura</a>
                                    <span>(Detective)</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"s-people\">
                            <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/users/default.jpg"), "html", null, true);
        echo "\"
                                 alt=\"Ace\">
                            <div class=\"s-people-desc\">
                                <div>
                                    <a href=\"#\" >Holland</a>
                                    <span>(Président)</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"s-people\">
                            <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/users/default.jpg"), "html", null, true);
        echo "\"
                                 alt=\"Rambo\">
                            <div class=\"s-people-desc\">
                                <div>
                                    <a href=\"#\" >Rambo</a>
                                    <span>(Casse tout)</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"s-people\">
                            <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/users/default.jpg"), "html", null, true);
        echo "\"
                                 alt=\"Ace\">
                            <div class=\"s-people-desc\">
                                <div>
                                    <a href=\"#\" >Snowden</a>
                                    <span>(Balance)</span>
                                </div>
                            </div>
                        </div>
                        <button type=\"button\" class=\"btn btn-xs btn-default\">Voir l'annuaire complet</button>
                    </div>
                    <hr>
                    <span class=\"fa-stack fa-md\">
                      <i class=\"fa fa-square fa-stack-2x\"></i>
                      <i class=\"fa fa-terminal fa-stack-1x fa-inverse\"></i>
                    </span>
                    <span class=\"fa-stack fa-md\">
                      <i class=\"fa fa-circle fa-stack-2x\"></i>
                      <i class=\"fa fa-trello fa-stack-1x fa-inverse\"></i>
                    </span>
                </div>

            </div>
        ";
        
        $__internal_18d1ac86e466e3882f06a3e81da60624b77b25aa20e8b65ca17a10d9d9a0e970->leave($__internal_18d1ac86e466e3882f06a3e81da60624b77b25aa20e8b65ca17a10d9d9a0e970_prof);

    }

    // line 169
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d336938bf85c67a22664779cd733914256ebbedf9003a6109cb6fe81041d9a1 = $this->env->getExtension("native_profiler");
        $__internal_7d336938bf85c67a22664779cd733914256ebbedf9003a6109cb6fe81041d9a1->enter($__internal_7d336938bf85c67a22664779cd733914256ebbedf9003a6109cb6fe81041d9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 170
        echo "
                ";
        
        $__internal_7d336938bf85c67a22664779cd733914256ebbedf9003a6109cb6fe81041d9a1->leave($__internal_7d336938bf85c67a22664779cd733914256ebbedf9003a6109cb6fe81041d9a1_prof);

    }

    // line 174
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ffc0563a3e106118a45a75620bcf3daa2433e29b150c2e29ede679aab7ff43ea = $this->env->getExtension("native_profiler");
        $__internal_ffc0563a3e106118a45a75620bcf3daa2433e29b150c2e29ede679aab7ff43ea->enter($__internal_ffc0563a3e106118a45a75620bcf3daa2433e29b150c2e29ede679aab7ff43ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ffc0563a3e106118a45a75620bcf3daa2433e29b150c2e29ede679aab7ff43ea->leave($__internal_ffc0563a3e106118a45a75620bcf3daa2433e29b150c2e29ede679aab7ff43ea_prof);

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
        return array (  400 => 174,  392 => 170,  386 => 169,  355 => 121,  342 => 111,  329 => 101,  316 => 91,  294 => 72,  287 => 68,  280 => 64,  272 => 59,  266 => 56,  259 => 51,  253 => 50,  243 => 45,  238 => 42,  231 => 37,  229 => 36,  225 => 35,  215 => 28,  205 => 20,  199 => 19,  191 => 15,  189 => 14,  184 => 13,  178 => 12,  169 => 9,  165 => 8,  160 => 7,  154 => 6,  142 => 5,  134 => 175,  132 => 174,  128 => 172,  126 => 169,  123 => 168,  116 => 166,  113 => 165,  108 => 163,  101 => 161,  98 => 160,  93 => 158,  86 => 156,  83 => 155,  78 => 153,  71 => 151,  68 => 150,  64 => 148,  59 => 145,  57 => 50,  54 => 49,  52 => 19,  48 => 17,  46 => 12,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
/*         <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% block headscript %}*/
/*             <script type="text/javascript" src="{{ asset('js/Chart.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/ChartBundle.js')*/
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
/*                     <img alt="Brand" src="{{ asset('img/users/default.jpg') }}">*/
/*                     {% if app.user is not null %}*/
/*                     <a class="btn btn-default navbar-btn" href="/profile"*/
/*                        role="button">Profil</a>*/
/*                     <a class="btn btn-default navbar-btn" href="/logout"*/
/*                        role="button">Logout</a>*/
/*                     {% else %}*/
/*                     <a class="btn btn-default navbar-btn" href="/login"*/
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
/*                         <li><a href="#" class="menu-unselected"><i class="fa fa-folder"></i>Fichiers</a></li>*/
/*                         <li><a href="{{ path('annuaireempty') }}"*/
/*                                class="menu-unselected"><i*/
/*                                         class="fa*/
/*                         fa-users"></i>Annuaire</a></li>*/
/*                         <li><a href="{{ path('stats') }}"*/
/*                                class="menu-unselected"><i*/
/*                                         class="fa*/
/*                         fa-area-chart"></i>Statistiques</a></li>*/
/*                         <li><a href="{{ path('admin') }}"*/
/*                                class="menu-unselected"><i*/
/*                                         class="fa*/
/*                         fa-server"></i>Admin</a></li>*/
/*                     </ul>*/
/*                     <hr>*/
/*                     <div class="panel">*/
/*                         <p class="s-title">NSZ en chiffres</p>*/
/*                         <ul>*/
/*                             <li><span class="label label-primary">2105</span> Employés  </li>*/
/*                             <li><span class="label label-primary">36</span> Documents partagés</li>*/
/*                             <li><span class="label label-primary">1</span> Balance</li>*/
/*                             <li><span class="label label-primary">51</span> Formations</li>*/
/*                             <li><span class="label label-primary">12</span> Admin/RH</li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="panel">*/
/*                         <p class="s-title">Annuaire</p>*/
/*                         <div class="s-people">*/
/*                             <img src="{{ asset('img/users/default.jpg') }}"*/
/*                                  alt="Ace">*/
/*                             <div class="s-people-desc">*/
/*                                 <div>*/
/*                                     <a href="#" >Ace Ventura</a>*/
/*                                     <span>(Detective)</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="s-people">*/
/*                             <img src="{{ asset('img/users/default.jpg') }}"*/
/*                                  alt="Ace">*/
/*                             <div class="s-people-desc">*/
/*                                 <div>*/
/*                                     <a href="#" >Holland</a>*/
/*                                     <span>(Président)</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="s-people">*/
/*                             <img src="{{ asset('img/users/default.jpg') }}"*/
/*                                  alt="Rambo">*/
/*                             <div class="s-people-desc">*/
/*                                 <div>*/
/*                                     <a href="#" >Rambo</a>*/
/*                                     <span>(Casse tout)</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="s-people">*/
/*                             <img src="{{ asset('img/users/default.jpg') }}"*/
/*                                  alt="Ace">*/
/*                             <div class="s-people-desc">*/
/*                                 <div>*/
/*                                     <a href="#" >Snowden</a>*/
/*                                     <span>(Balance)</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <button type="button" class="btn btn-xs btn-default">Voir l'annuaire complet</button>*/
/*                     </div>*/
/*                     <hr>*/
/*                     <span class="fa-stack fa-md">*/
/*                       <i class="fa fa-square fa-stack-2x"></i>*/
/*                       <i class="fa fa-terminal fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                     <span class="fa-stack fa-md">*/
/*                       <i class="fa fa-circle fa-stack-2x"></i>*/
/*                       <i class="fa fa-trello fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
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
