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
            'topbar' => array($this, 'block_topbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21e7ccc4d94152a4938a45582a926198897f3a91626424fbfb1aa0131c122bce = $this->env->getExtension("native_profiler");
        $__internal_21e7ccc4d94152a4938a45582a926198897f3a91626424fbfb1aa0131c122bce->enter($__internal_21e7ccc4d94152a4938a45582a926198897f3a91626424fbfb1aa0131c122bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('topbar', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
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
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 161
        echo "            </div>
        </div>
        ";
        // line 163
        $this->displayBlock('javascripts', $context, $blocks);
        // line 164
        echo "    </body>
</html>";
        
        $__internal_21e7ccc4d94152a4938a45582a926198897f3a91626424fbfb1aa0131c122bce->leave($__internal_21e7ccc4d94152a4938a45582a926198897f3a91626424fbfb1aa0131c122bce_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcefac6359c2ff5b0c3095929ecd96d04a598c487d1c395f01aa315668c701b0 = $this->env->getExtension("native_profiler");
        $__internal_bcefac6359c2ff5b0c3095929ecd96d04a598c487d1c395f01aa315668c701b0->enter($__internal_bcefac6359c2ff5b0c3095929ecd96d04a598c487d1c395f01aa315668c701b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NSZ";
        
        $__internal_bcefac6359c2ff5b0c3095929ecd96d04a598c487d1c395f01aa315668c701b0->leave($__internal_bcefac6359c2ff5b0c3095929ecd96d04a598c487d1c395f01aa315668c701b0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df6ad6e980e5bc6330b18d9060a6dcb1c5dbf423629fc146e9bbf68ccea433ff = $this->env->getExtension("native_profiler");
        $__internal_df6ad6e980e5bc6330b18d9060a6dcb1c5dbf423629fc146e9bbf68ccea433ff->enter($__internal_df6ad6e980e5bc6330b18d9060a6dcb1c5dbf423629fc146e9bbf68ccea433ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_df6ad6e980e5bc6330b18d9060a6dcb1c5dbf423629fc146e9bbf68ccea433ff->leave($__internal_df6ad6e980e5bc6330b18d9060a6dcb1c5dbf423629fc146e9bbf68ccea433ff_prof);

    }

    // line 14
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_4029c647afaae30bce804412b6fa3f79d6b8e8541588c82633b48b3eaf9d622c = $this->env->getExtension("native_profiler");
        $__internal_4029c647afaae30bce804412b6fa3f79d6b8e8541588c82633b48b3eaf9d622c->enter($__internal_4029c647afaae30bce804412b6fa3f79d6b8e8541588c82633b48b3eaf9d622c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 15
        echo "        <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <img class =\"navbar-brand\" alt=\"Brand\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoaigle.png"), "html", null, true);
        echo "\" >
                <a class=\"navbar-brand\" href=\"#\">National Security Zero</a>
                <p class=\"navbar-text\">La sécurité avant tout, mais avant apéro !</p>

            </div>
            <div id=\"navbar\" class=\"nav navbar-collapse collapse\">
                <div class=\"nav navbar-right navbar-correct\">
                    <img alt=\"Brand\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/users/default.jpg"), "html", null, true);
        echo "\">
                    <a class=\"btn btn-default navbar-btn\" href=\"/profile\"
                       role=\"button\">Profil</a>
                    <a class=\"btn btn-default navbar-btn\" href=\"/logout\"
                       role=\"button\">Logout</a>
                </div>
            </div><!--/.nav-collapse -->
        </nav>
        ";
        
        $__internal_4029c647afaae30bce804412b6fa3f79d6b8e8541588c82633b48b3eaf9d622c->leave($__internal_4029c647afaae30bce804412b6fa3f79d6b8e8541588c82633b48b3eaf9d622c_prof);

    }

    // line 40
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1988aafe6e2b520c86813d933807c38d9b531c26f4dcb454b0f8c5120f8392b5 = $this->env->getExtension("native_profiler");
        $__internal_1988aafe6e2b520c86813d933807c38d9b531c26f4dcb454b0f8c5120f8392b5->enter($__internal_1988aafe6e2b520c86813d933807c38d9b531c26f4dcb454b0f8c5120f8392b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 41
        echo "            <div class=\"sidebar\">
                <div class=\"s-container\">
                    <ul>
                        <li ><a href=\"/\" class=\"menu-selected\"><i
                                        class=\"glyphicon glyphicon-home\"></i>Accueil</a></li>
                        <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"glyphicon glyphicon-education\"></i>Formations</a></li>
                        <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-th-list\"></i>Forum</a></li>
                        <li><a href=\"#\" class=\"menu-unselected\"><i class=\"fa fa-folder\"></i>Fichiers</a></li>
                        <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("annuaire");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-users\"></i>Annuaire</a></li>
                        <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("stats");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-area-chart\"></i>Statistiques</a></li>
                        <li><a href=\"";
        // line 62
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
        // line 81
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
        // line 91
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
        // line 101
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
        // line 111
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
        
        $__internal_1988aafe6e2b520c86813d933807c38d9b531c26f4dcb454b0f8c5120f8392b5->leave($__internal_1988aafe6e2b520c86813d933807c38d9b531c26f4dcb454b0f8c5120f8392b5_prof);

    }

    // line 158
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ca58943745368e9726663eb63af6e92bed223b18dfcd9a38c72eed73851253c = $this->env->getExtension("native_profiler");
        $__internal_5ca58943745368e9726663eb63af6e92bed223b18dfcd9a38c72eed73851253c->enter($__internal_5ca58943745368e9726663eb63af6e92bed223b18dfcd9a38c72eed73851253c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 159
        echo "
            ";
        
        $__internal_5ca58943745368e9726663eb63af6e92bed223b18dfcd9a38c72eed73851253c->leave($__internal_5ca58943745368e9726663eb63af6e92bed223b18dfcd9a38c72eed73851253c_prof);

    }

    // line 163
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cbce1b2196d11d29cc0c2324c5b82d4c62df1f791f2d08bfffd7731112bdc5ee = $this->env->getExtension("native_profiler");
        $__internal_cbce1b2196d11d29cc0c2324c5b82d4c62df1f791f2d08bfffd7731112bdc5ee->enter($__internal_cbce1b2196d11d29cc0c2324c5b82d4c62df1f791f2d08bfffd7731112bdc5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cbce1b2196d11d29cc0c2324c5b82d4c62df1f791f2d08bfffd7731112bdc5ee->leave($__internal_cbce1b2196d11d29cc0c2324c5b82d4c62df1f791f2d08bfffd7731112bdc5ee_prof);

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
        return array (  360 => 163,  352 => 159,  346 => 158,  315 => 111,  302 => 101,  289 => 91,  276 => 81,  254 => 62,  247 => 58,  240 => 54,  232 => 49,  226 => 46,  219 => 41,  213 => 40,  197 => 30,  187 => 23,  177 => 15,  171 => 14,  162 => 9,  158 => 8,  153 => 7,  147 => 6,  135 => 5,  127 => 164,  125 => 163,  121 => 161,  118 => 158,  111 => 156,  108 => 155,  103 => 153,  96 => 151,  93 => 150,  88 => 148,  81 => 146,  78 => 145,  73 => 143,  66 => 141,  63 => 140,  59 => 138,  54 => 135,  52 => 40,  49 => 39,  47 => 14,  40 => 11,  38 => 6,  34 => 5,  28 => 1,);
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
/*                     <a class="btn btn-default navbar-btn" href="/profile"*/
/*                        role="button">Profil</a>*/
/*                     <a class="btn btn-default navbar-btn" href="/logout"*/
/*                        role="button">Logout</a>*/
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
/*                         <li><a href="{{ path('annuaire') }}"*/
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
/*             {% block body %}*/
/* */
/*             {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
