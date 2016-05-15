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
        $__internal_eb2eada59c9c80bbe259d226b8259a8bcbe4e8b5d8affc4bdb2b18eb9057ccb2 = $this->env->getExtension("native_profiler");
        $__internal_eb2eada59c9c80bbe259d226b8259a8bcbe4e8b5d8affc4bdb2b18eb9057ccb2->enter($__internal_eb2eada59c9c80bbe259d226b8259a8bcbe4e8b5d8affc4bdb2b18eb9057ccb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 152
        echo "
        <div class=\"wrapper\">
            <div class=\"container white-shadow\" style=\"padding-top: 10px;\">
                ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 157
            echo "                    <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 158
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 162
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 163
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 167
            echo "                    <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 168
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 172
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 173
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "
                ";
        // line 176
        $this->displayBlock('body', $context, $blocks);
        // line 179
        echo "            </div>
        </div>
        ";
        // line 181
        $this->displayBlock('javascripts', $context, $blocks);
        // line 182
        echo "    </body>
</html>";
        
        $__internal_eb2eada59c9c80bbe259d226b8259a8bcbe4e8b5d8affc4bdb2b18eb9057ccb2->leave($__internal_eb2eada59c9c80bbe259d226b8259a8bcbe4e8b5d8affc4bdb2b18eb9057ccb2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_69f232f3a4742615d6c2d9db3cceea88f7aac97656a57c167283e2a654475370 = $this->env->getExtension("native_profiler");
        $__internal_69f232f3a4742615d6c2d9db3cceea88f7aac97656a57c167283e2a654475370->enter($__internal_69f232f3a4742615d6c2d9db3cceea88f7aac97656a57c167283e2a654475370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NSZ";
        
        $__internal_69f232f3a4742615d6c2d9db3cceea88f7aac97656a57c167283e2a654475370->leave($__internal_69f232f3a4742615d6c2d9db3cceea88f7aac97656a57c167283e2a654475370_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f668a4ad313eeddad27dcf8f50a9fb3d8c3c5e6c9f7b6949e8600fd1649049b2 = $this->env->getExtension("native_profiler");
        $__internal_f668a4ad313eeddad27dcf8f50a9fb3d8c3c5e6c9f7b6949e8600fd1649049b2->enter($__internal_f668a4ad313eeddad27dcf8f50a9fb3d8c3c5e6c9f7b6949e8600fd1649049b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f668a4ad313eeddad27dcf8f50a9fb3d8c3c5e6c9f7b6949e8600fd1649049b2->leave($__internal_f668a4ad313eeddad27dcf8f50a9fb3d8c3c5e6c9f7b6949e8600fd1649049b2_prof);

    }

    // line 12
    public function block_headscript($context, array $blocks = array())
    {
        $__internal_1a3ec4d209cd111ca9f6a8e4800dffd0471f511cd42b5d375ca6e3f5a6dd594e = $this->env->getExtension("native_profiler");
        $__internal_1a3ec4d209cd111ca9f6a8e4800dffd0471f511cd42b5d375ca6e3f5a6dd594e->enter($__internal_1a3ec4d209cd111ca9f6a8e4800dffd0471f511cd42b5d375ca6e3f5a6dd594e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headscript"));

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
        
        $__internal_1a3ec4d209cd111ca9f6a8e4800dffd0471f511cd42b5d375ca6e3f5a6dd594e->leave($__internal_1a3ec4d209cd111ca9f6a8e4800dffd0471f511cd42b5d375ca6e3f5a6dd594e_prof);

    }

    // line 19
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_2ded00f3e5a14886ac607334b45e50b34f98bc6dc927a253548a56d3f27d8072 = $this->env->getExtension("native_profiler");
        $__internal_2ded00f3e5a14886ac607334b45e50b34f98bc6dc927a253548a56d3f27d8072->enter($__internal_2ded00f3e5a14886ac607334b45e50b34f98bc6dc927a253548a56d3f27d8072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

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
        
        $__internal_2ded00f3e5a14886ac607334b45e50b34f98bc6dc927a253548a56d3f27d8072->leave($__internal_2ded00f3e5a14886ac607334b45e50b34f98bc6dc927a253548a56d3f27d8072_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_16f3f01604f0b3281f36aad5baaa048d3c45f18ea83b89b662e5ac4b14be774d = $this->env->getExtension("native_profiler");
        $__internal_16f3f01604f0b3281f36aad5baaa048d3c45f18ea83b89b662e5ac4b14be774d->enter($__internal_16f3f01604f0b3281f36aad5baaa048d3c45f18ea83b89b662e5ac4b14be774d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        // line 98
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
        // line 108
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
        // line 118
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
        // line 128
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
        
        $__internal_16f3f01604f0b3281f36aad5baaa048d3c45f18ea83b89b662e5ac4b14be774d->leave($__internal_16f3f01604f0b3281f36aad5baaa048d3c45f18ea83b89b662e5ac4b14be774d_prof);

    }

    // line 176
    public function block_body($context, array $blocks = array())
    {
        $__internal_338026fdc448675c8609f9d69e5581aa5a857f0bd13544a3096170004fb4f49d = $this->env->getExtension("native_profiler");
        $__internal_338026fdc448675c8609f9d69e5581aa5a857f0bd13544a3096170004fb4f49d->enter($__internal_338026fdc448675c8609f9d69e5581aa5a857f0bd13544a3096170004fb4f49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 177
        echo "
                ";
        
        $__internal_338026fdc448675c8609f9d69e5581aa5a857f0bd13544a3096170004fb4f49d->leave($__internal_338026fdc448675c8609f9d69e5581aa5a857f0bd13544a3096170004fb4f49d_prof);

    }

    // line 181
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6cde43e95c67b9ac0fcbb028d92f7e4fbd0322c851fa59791609eefece5de042 = $this->env->getExtension("native_profiler");
        $__internal_6cde43e95c67b9ac0fcbb028d92f7e4fbd0322c851fa59791609eefece5de042->enter($__internal_6cde43e95c67b9ac0fcbb028d92f7e4fbd0322c851fa59791609eefece5de042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6cde43e95c67b9ac0fcbb028d92f7e4fbd0322c851fa59791609eefece5de042->leave($__internal_6cde43e95c67b9ac0fcbb028d92f7e4fbd0322c851fa59791609eefece5de042_prof);

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
        return array (  411 => 181,  403 => 177,  397 => 176,  366 => 128,  353 => 118,  340 => 108,  327 => 98,  305 => 79,  298 => 75,  291 => 71,  284 => 67,  277 => 63,  271 => 60,  264 => 55,  258 => 54,  248 => 49,  243 => 46,  235 => 41,  234 => 40,  231 => 39,  228 => 37,  226 => 36,  215 => 28,  205 => 20,  199 => 19,  191 => 15,  189 => 14,  184 => 13,  178 => 12,  169 => 9,  165 => 8,  160 => 7,  154 => 6,  142 => 5,  134 => 182,  132 => 181,  128 => 179,  126 => 176,  123 => 175,  116 => 173,  113 => 172,  108 => 170,  101 => 168,  98 => 167,  93 => 165,  86 => 163,  83 => 162,  78 => 160,  71 => 158,  68 => 157,  64 => 155,  59 => 152,  57 => 54,  54 => 53,  52 => 19,  48 => 17,  46 => 12,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
