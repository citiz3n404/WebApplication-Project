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
        $__internal_db62a23dfa52a621fa85ff805e1f7652937c8a008223ee302f0b597a38eafe78 = $this->env->getExtension("native_profiler");
        $__internal_db62a23dfa52a621fa85ff805e1f7652937c8a008223ee302f0b597a38eafe78->enter($__internal_db62a23dfa52a621fa85ff805e1f7652937c8a008223ee302f0b597a38eafe78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('sidebar', $context, $blocks);
        // line 135
        echo "
        <div class=\"wrapper\">
            <div class=\"container white-shadow\" style=\"padding-top: 10px;\">
                ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 140
            echo "                    <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 141
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 145
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 146
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 150
            echo "                    <div class=\"alert alert-warning\">";
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 155
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 156
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "
                ";
        // line 159
        $this->displayBlock('body', $context, $blocks);
        // line 162
        echo "            </div>
        </div>
        ";
        // line 164
        $this->displayBlock('javascripts', $context, $blocks);
        // line 165
        echo "    </body>
</html>";
        
        $__internal_db62a23dfa52a621fa85ff805e1f7652937c8a008223ee302f0b597a38eafe78->leave($__internal_db62a23dfa52a621fa85ff805e1f7652937c8a008223ee302f0b597a38eafe78_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_85e08d0a860e7cb5f00c251173106769f957c0bbd71fb718f140e683ee3ff0ee = $this->env->getExtension("native_profiler");
        $__internal_85e08d0a860e7cb5f00c251173106769f957c0bbd71fb718f140e683ee3ff0ee->enter($__internal_85e08d0a860e7cb5f00c251173106769f957c0bbd71fb718f140e683ee3ff0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NSZ";
        
        $__internal_85e08d0a860e7cb5f00c251173106769f957c0bbd71fb718f140e683ee3ff0ee->leave($__internal_85e08d0a860e7cb5f00c251173106769f957c0bbd71fb718f140e683ee3ff0ee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_30f8adcae5eb080557306dd7a34f8d3d561b22d04cdf8ecdc1d99b30c05876f8 = $this->env->getExtension("native_profiler");
        $__internal_30f8adcae5eb080557306dd7a34f8d3d561b22d04cdf8ecdc1d99b30c05876f8->enter($__internal_30f8adcae5eb080557306dd7a34f8d3d561b22d04cdf8ecdc1d99b30c05876f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_30f8adcae5eb080557306dd7a34f8d3d561b22d04cdf8ecdc1d99b30c05876f8->leave($__internal_30f8adcae5eb080557306dd7a34f8d3d561b22d04cdf8ecdc1d99b30c05876f8_prof);

    }

    // line 12
    public function block_headscript($context, array $blocks = array())
    {
        $__internal_731de342f05df14d83ade0896fb92c34d1c5a69d9a7855c5930bb370d4bca874 = $this->env->getExtension("native_profiler");
        $__internal_731de342f05df14d83ade0896fb92c34d1c5a69d9a7855c5930bb370d4bca874->enter($__internal_731de342f05df14d83ade0896fb92c34d1c5a69d9a7855c5930bb370d4bca874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headscript"));

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
        
        $__internal_731de342f05df14d83ade0896fb92c34d1c5a69d9a7855c5930bb370d4bca874->leave($__internal_731de342f05df14d83ade0896fb92c34d1c5a69d9a7855c5930bb370d4bca874_prof);

    }

    // line 19
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_16fd040bf09806e34eafd0418171c1d4de6ff6d49dde16b3124eacb614206eb5 = $this->env->getExtension("native_profiler");
        $__internal_16fd040bf09806e34eafd0418171c1d4de6ff6d49dde16b3124eacb614206eb5->enter($__internal_16fd040bf09806e34eafd0418171c1d4de6ff6d49dde16b3124eacb614206eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

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

                    ";
        // line 36
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 37
            echo "                        <img alt=\"Brand\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "salarie", array()), "img", array()))), "html", null, true);
            // line 39
            echo "\">
                    <a class=\"btn btn-default navbar-btn btn-sm\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute(            // line 41
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"
                       role=\"button\">Profil</a>
                    <a class=\"btn btn-default navbar-btn btn-sm\" href=\"/logout\"
                       role=\"button\">Logout</a>
                    ";
        } else {
            // line 46
            echo "                    <a class=\"btn btn-default navbar-btn btn-sm\" href=\"/login\"
                       role=\"button\">Login</a>
                    ";
        }
        // line 49
        echo "                </div>
            </div><!--/.nav-collapse -->
        </nav>
        ";
        
        $__internal_16fd040bf09806e34eafd0418171c1d4de6ff6d49dde16b3124eacb614206eb5->leave($__internal_16fd040bf09806e34eafd0418171c1d4de6ff6d49dde16b3124eacb614206eb5_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7bbca6a3d506026cad5dec63ef9157ab125b2e9bb0ba9b82efc8072c4665290b = $this->env->getExtension("native_profiler");
        $__internal_7bbca6a3d506026cad5dec63ef9157ab125b2e9bb0ba9b82efc8072c4665290b->enter($__internal_7bbca6a3d506026cad5dec63ef9157ab125b2e9bb0ba9b82efc8072c4665290b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 55
        echo "            <div class=\"sidebar\">
                <div class=\"s-container\">
                    <ul>
                        <li ><a href=\"/\" class=\"menu-selected\"><i
                                        class=\"glyphicon glyphicon-home\"></i>Accueil</a></li>
                        <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"glyphicon glyphicon-education\"></i>Formations</a></li>
                        <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-th-list\"></i>Forum</a></li>
                        <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("dossiers");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-folder\"></i>Fichiers</a></li>
                        <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("annuaireempty");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-users\"></i>Annuaire</a></li>
                        <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("stats");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-area-chart\"></i>Statistiques</a></li>
                        <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-server\"></i>Admin</a></li>
                    </ul>
                    <hr>
                    <div class=\"panel\">
                        <p class=\"s-title\">les chiffres clés</p>


                        <ul>
                            <li><span class=\"label label-primary\">";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbUsers", array(), "method"), "html", null, true);
        echo "</span>
                                Employés  </li>
                            <li><span class=\"label label-primary\">";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbFiles", array(), "method"), "html", null, true);
        echo "</span>
                                Documents partagés</li>
                            <li><span class=\"label label-primary\">";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbFormations", array(), "method"), "html", null, true);
        // line 95
        echo "</span>
                                Formations</li>
                            <li><span class=\"label label-primary\">";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbReplies", array()), "html", null, true);
        // line 98
        echo "</span>
                                 Réponses Forum</li>
                        </ul>


                    </div>
                    <div class=\"panel\">
                        <p class=\"s-title\">Top 5 des membres</p>

                        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getTop5", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 108
            echo "                        <div class=\"s-people\">
                            <img src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "img", array()))), "html", null, true);
            echo "\"
                                 alt=\"img\">
                            <div class=\"s-people-desc\">
                                <div>
                                    <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute(            // line 114
$context["user"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["user"], "username", array())), "html", null, true);
            echo "</a>
                                    <span>(";
            // line 115
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
        // line 120
        echo "                    </div>

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
        
        $__internal_7bbca6a3d506026cad5dec63ef9157ab125b2e9bb0ba9b82efc8072c4665290b->leave($__internal_7bbca6a3d506026cad5dec63ef9157ab125b2e9bb0ba9b82efc8072c4665290b_prof);

    }

    // line 159
    public function block_body($context, array $blocks = array())
    {
        $__internal_90d18ecd26e7b4c6eb27a243d8e713064dfa073c5bf744824ef0af31bb7e88e0 = $this->env->getExtension("native_profiler");
        $__internal_90d18ecd26e7b4c6eb27a243d8e713064dfa073c5bf744824ef0af31bb7e88e0->enter($__internal_90d18ecd26e7b4c6eb27a243d8e713064dfa073c5bf744824ef0af31bb7e88e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 160
        echo "
                ";
        
        $__internal_90d18ecd26e7b4c6eb27a243d8e713064dfa073c5bf744824ef0af31bb7e88e0->leave($__internal_90d18ecd26e7b4c6eb27a243d8e713064dfa073c5bf744824ef0af31bb7e88e0_prof);

    }

    // line 164
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5279a320c6d20f8f82f391990da5f00f7f375eaf96c223c83f998db42d9d6df2 = $this->env->getExtension("native_profiler");
        $__internal_5279a320c6d20f8f82f391990da5f00f7f375eaf96c223c83f998db42d9d6df2->enter($__internal_5279a320c6d20f8f82f391990da5f00f7f375eaf96c223c83f998db42d9d6df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5279a320c6d20f8f82f391990da5f00f7f375eaf96c223c83f998db42d9d6df2->leave($__internal_5279a320c6d20f8f82f391990da5f00f7f375eaf96c223c83f998db42d9d6df2_prof);

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
        return array (  415 => 164,  407 => 160,  401 => 159,  380 => 120,  369 => 115,  363 => 114,  362 => 113,  355 => 109,  352 => 108,  348 => 107,  337 => 98,  335 => 97,  331 => 95,  329 => 94,  324 => 92,  319 => 90,  305 => 79,  298 => 75,  291 => 71,  284 => 67,  277 => 63,  271 => 60,  264 => 55,  258 => 54,  248 => 49,  243 => 46,  235 => 41,  234 => 40,  231 => 39,  228 => 37,  226 => 36,  215 => 28,  205 => 20,  199 => 19,  191 => 15,  189 => 14,  184 => 13,  178 => 12,  169 => 9,  165 => 8,  160 => 7,  154 => 6,  142 => 5,  134 => 165,  132 => 164,  128 => 162,  126 => 159,  123 => 158,  116 => 156,  113 => 155,  108 => 153,  101 => 151,  98 => 150,  93 => 148,  86 => 146,  83 => 145,  78 => 143,  71 => 141,  68 => 140,  64 => 138,  59 => 135,  57 => 54,  54 => 53,  52 => 19,  48 => 17,  46 => 12,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
/*                         <li><a href="{{ path('admin') }}"*/
/*                                class="menu-unselected"><i*/
/*                                         class="fa*/
/*                         fa-server"></i>Admin</a></li>*/
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
