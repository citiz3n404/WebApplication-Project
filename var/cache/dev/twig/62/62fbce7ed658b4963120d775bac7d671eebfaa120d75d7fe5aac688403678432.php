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
        $__internal_a8e44563b9f0968213fb61b8bb191f66198a13a025f7b4dfb92fcc2d6c4ec166 = $this->env->getExtension("native_profiler");
        $__internal_a8e44563b9f0968213fb61b8bb191f66198a13a025f7b4dfb92fcc2d6c4ec166->enter($__internal_a8e44563b9f0968213fb61b8bb191f66198a13a025f7b4dfb92fcc2d6c4ec166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 77
        echo "
        ";
        // line 78
        $this->displayBlock('sidebar', $context, $blocks);
        // line 147
        echo "
        <div class=\"wrapper\">
            <div class=\"container white-shadow\" style=\"padding-top: 10px;\">
                ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 152
            echo "                    <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 153
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 157
            echo "                    <div class=\"alert alert-success\">";
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 162
            echo "                    <div class=\"alert alert-warning\">";
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 167
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 168
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "
                ";
        // line 171
        $this->displayBlock('body', $context, $blocks);
        // line 174
        echo "            </div>
        </div>
        ";
        // line 176
        $this->displayBlock('javascripts', $context, $blocks);
        // line 177
        echo "    </body>
</html>";
        
        $__internal_a8e44563b9f0968213fb61b8bb191f66198a13a025f7b4dfb92fcc2d6c4ec166->leave($__internal_a8e44563b9f0968213fb61b8bb191f66198a13a025f7b4dfb92fcc2d6c4ec166_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb269b44901b6c59d1e90ece54e5fefc18f589b4363f4381957b26e8e2fca49e = $this->env->getExtension("native_profiler");
        $__internal_cb269b44901b6c59d1e90ece54e5fefc18f589b4363f4381957b26e8e2fca49e->enter($__internal_cb269b44901b6c59d1e90ece54e5fefc18f589b4363f4381957b26e8e2fca49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NSZ";
        
        $__internal_cb269b44901b6c59d1e90ece54e5fefc18f589b4363f4381957b26e8e2fca49e->leave($__internal_cb269b44901b6c59d1e90ece54e5fefc18f589b4363f4381957b26e8e2fca49e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a9871f0cd52168311f0a78c4ebc88735c1c9c4316af07410740a11e9df5399b = $this->env->getExtension("native_profiler");
        $__internal_5a9871f0cd52168311f0a78c4ebc88735c1c9c4316af07410740a11e9df5399b->enter($__internal_5a9871f0cd52168311f0a78c4ebc88735c1c9c4316af07410740a11e9df5399b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5a9871f0cd52168311f0a78c4ebc88735c1c9c4316af07410740a11e9df5399b->leave($__internal_5a9871f0cd52168311f0a78c4ebc88735c1c9c4316af07410740a11e9df5399b_prof);

    }

    // line 16
    public function block_headscript($context, array $blocks = array())
    {
        $__internal_9fcdd21bb7c16ab1a55a2bcb419380c4db174746cfcaecc73e3142553e52b10d = $this->env->getExtension("native_profiler");
        $__internal_9fcdd21bb7c16ab1a55a2bcb419380c4db174746cfcaecc73e3142553e52b10d->enter($__internal_9fcdd21bb7c16ab1a55a2bcb419380c4db174746cfcaecc73e3142553e52b10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headscript"));

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
        
        $__internal_9fcdd21bb7c16ab1a55a2bcb419380c4db174746cfcaecc73e3142553e52b10d->leave($__internal_9fcdd21bb7c16ab1a55a2bcb419380c4db174746cfcaecc73e3142553e52b10d_prof);

    }

    // line 28
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_83c0a2cc1567ff267692220856b71260492562230f619b42719f0495cc581a6d = $this->env->getExtension("native_profiler");
        $__internal_83c0a2cc1567ff267692220856b71260492562230f619b42719f0495cc581a6d->enter($__internal_83c0a2cc1567ff267692220856b71260492562230f619b42719f0495cc581a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

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
            echo "                        <p class=\"navbar-text\">
                            <span class=\"label label-default\">";
            // line 47
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            // line 48
            echo "</span>
                            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 50
                echo "                                ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 51
                    echo "                                    <span class=\"label label-black\">ADMIN</span>
                                ";
                } elseif ((                // line 52
$context["role"] == "ROLE_FORMATEUR")) {
                    // line 53
                    echo "                                    <span class=\"label label-warning\">FORMATEUR</span>
                                ";
                } elseif ((                // line 54
$context["role"] == "ROLE_MODERATEUR")) {
                    // line 55
                    echo "                                    <span class=\"label label-danger\">MODERATEUR</span>
                                ";
                } elseif ((                // line 56
$context["role"] == "ROLE_RH")) {
                    // line 57
                    echo "                                    <span class=\"label label-success\">RH</span>
                                ";
                }
                // line 59
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                        </p>
                        <img alt=\"Brand\" src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "salarie", array()), "img", array()))), "html", null, true);
            // line 63
            echo "\">
                    <a class=\"btn btn-default navbar-btn btn-sm\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute(            // line 65
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"
                       role=\"button\">Profil</a>
                    <a class=\"btn btn-default navbar-btn btn-sm\" href=\"/logout\"
                       role=\"button\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i></a>
                    ";
        } else {
            // line 70
            echo "                    <a class=\"btn btn-default navbar-btn btn-sm\" href=\"/login\"
                       role=\"button\">Login</a>
                    ";
        }
        // line 73
        echo "                </div>
            </div><!--/.nav-collapse -->
        </nav>
        ";
        
        $__internal_83c0a2cc1567ff267692220856b71260492562230f619b42719f0495cc581a6d->leave($__internal_83c0a2cc1567ff267692220856b71260492562230f619b42719f0495cc581a6d_prof);

    }

    // line 78
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bcc09332c47b8b12330f7f6504725ceaa9b9b5ba73b2f0ea7868779d6c7c9bcf = $this->env->getExtension("native_profiler");
        $__internal_bcc09332c47b8b12330f7f6504725ceaa9b9b5ba73b2f0ea7868779d6c7c9bcf->enter($__internal_bcc09332c47b8b12330f7f6504725ceaa9b9b5ba73b2f0ea7868779d6c7c9bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 79
        echo "            <div class=\"sidebar\">
                <div class=\"s-container\">
                    <ul>
                        <li ><a href=\"/\" class=\"menu-selected\"><i
                                        class=\"glyphicon glyphicon-home\"></i>Accueil</a></li>
                        <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"glyphicon glyphicon-education\"></i>Formations</a></li>
                        <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-th-list\"></i>Forum</a></li>
                        <li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("dossiers");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-folder\"></i>Fichiers</a></li>
                        <li><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("annuaireempty");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-users\"></i>Annuaire</a></li>
                        <li><a href=\"";
        // line 99
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
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbUsers", array(), "method"), "html", null, true);
        echo "</span>
                                Employés  </li>
                            <li><span class=\"label label-primary\">";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbFiles", array(), "method"), "html", null, true);
        echo "</span>
                                Documents partagés</li>
                            <li><span class=\"label label-primary\">";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbFormations", array(), "method"), "html", null, true);
        // line 115
        echo "</span>
                                Formations</li>
                            <li><span class=\"label label-primary\">";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbReplies", array()), "html", null, true);
        // line 118
        echo "</span>
                                 Réponses Forum</li>
                        </ul>


                    </div>
                    <div class=\"panel\">
                        <p class=\"s-title\">Top 5 des membres</p>

                        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getTop5", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 128
            echo "                        <div class=\"s-people\">
                            <img src=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "img", array()))), "html", null, true);
            echo "\"
                                 alt=\"img\">
                            <div class=\"s-people-desc\">
                                <div>
                                    <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute(            // line 134
$context["user"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["user"], "username", array())), "html", null, true);
            echo "</a>
                                    <span>(";
            // line 135
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
        // line 140
        echo "                    </div>

                    <hr>
                </div>

            </div>
        ";
        
        $__internal_bcc09332c47b8b12330f7f6504725ceaa9b9b5ba73b2f0ea7868779d6c7c9bcf->leave($__internal_bcc09332c47b8b12330f7f6504725ceaa9b9b5ba73b2f0ea7868779d6c7c9bcf_prof);

    }

    // line 171
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b12ad06cb3fd23ea0c91b9112b885a00bf9adc802d6a0d22fc6adb10cfaf06e = $this->env->getExtension("native_profiler");
        $__internal_5b12ad06cb3fd23ea0c91b9112b885a00bf9adc802d6a0d22fc6adb10cfaf06e->enter($__internal_5b12ad06cb3fd23ea0c91b9112b885a00bf9adc802d6a0d22fc6adb10cfaf06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 172
        echo "
                ";
        
        $__internal_5b12ad06cb3fd23ea0c91b9112b885a00bf9adc802d6a0d22fc6adb10cfaf06e->leave($__internal_5b12ad06cb3fd23ea0c91b9112b885a00bf9adc802d6a0d22fc6adb10cfaf06e_prof);

    }

    // line 176
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd43054394b3eb92ef255dfefdfd43bb22538ce6fba07bd02172218a0a8cd705 = $this->env->getExtension("native_profiler");
        $__internal_dd43054394b3eb92ef255dfefdfd43bb22538ce6fba07bd02172218a0a8cd705->enter($__internal_dd43054394b3eb92ef255dfefdfd43bb22538ce6fba07bd02172218a0a8cd705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dd43054394b3eb92ef255dfefdfd43bb22538ce6fba07bd02172218a0a8cd705->leave($__internal_dd43054394b3eb92ef255dfefdfd43bb22538ce6fba07bd02172218a0a8cd705_prof);

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
        return array (  466 => 176,  458 => 172,  452 => 171,  439 => 140,  428 => 135,  422 => 134,  421 => 133,  414 => 129,  411 => 128,  407 => 127,  396 => 118,  394 => 117,  390 => 115,  388 => 114,  383 => 112,  378 => 110,  364 => 99,  357 => 95,  350 => 91,  343 => 87,  337 => 84,  330 => 79,  324 => 78,  314 => 73,  309 => 70,  301 => 65,  300 => 64,  297 => 63,  295 => 61,  292 => 60,  286 => 59,  282 => 57,  280 => 56,  277 => 55,  275 => 54,  272 => 53,  270 => 52,  267 => 51,  264 => 50,  260 => 49,  257 => 48,  255 => 47,  252 => 46,  250 => 45,  239 => 37,  229 => 29,  223 => 28,  215 => 24,  213 => 23,  210 => 22,  208 => 21,  205 => 20,  203 => 19,  200 => 18,  197 => 17,  191 => 16,  182 => 13,  179 => 12,  177 => 11,  173 => 10,  169 => 9,  165 => 8,  160 => 7,  154 => 6,  142 => 5,  134 => 177,  132 => 176,  128 => 174,  126 => 171,  123 => 170,  116 => 168,  113 => 167,  108 => 165,  101 => 163,  98 => 162,  93 => 160,  86 => 158,  83 => 157,  78 => 155,  71 => 153,  68 => 152,  64 => 150,  59 => 147,  57 => 78,  54 => 77,  52 => 28,  48 => 26,  46 => 16,  41 => 15,  39 => 6,  35 => 5,  29 => 1,);
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
/*                         <p class="navbar-text">*/
/*                             <span class="label label-default">{{ app.user*/
/*                                 .username|upper }}</span>*/
/*                             {% for role in app.user.roles %}*/
/*                                 {% if role == "ROLE_ADMIN" %}*/
/*                                     <span class="label label-black">ADMIN</span>*/
/*                                 {% elseif role == "ROLE_FORMATEUR" %}*/
/*                                     <span class="label label-warning">FORMATEUR</span>*/
/*                                 {% elseif role == "ROLE_MODERATEUR" %}*/
/*                                     <span class="label label-danger">MODERATEUR</span>*/
/*                                 {% elseif role == "ROLE_RH" %}*/
/*                                     <span class="label label-success">RH</span>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </p>*/
/*                         <img alt="Brand" src="{{ asset('img/users/' ~ app.user*/
/*                         .salarie.img )*/
/*                         }}">*/
/*                     <a class="btn btn-default navbar-btn btn-sm" href="{{ path*/
/*                     ('profiluser', {'id': app.user.id}) }}"*/
/*                        role="button">Profil</a>*/
/*                     <a class="btn btn-default navbar-btn btn-sm" href="/logout"*/
/*                        role="button"><i class="fa fa-sign-out" aria-hidden="true"></i></a>*/
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
