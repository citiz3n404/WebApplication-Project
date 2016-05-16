<?php

/* base.html.twig */
class __TwigTemplate_054220a4a0de158d8fe51ac6baa0b8ec34e10d3bb9ab85265726ebb668a1dc4c extends Twig_Template
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
        $__internal_32b60faa39ea539b58476c7916f998a6cbe858799a6be6bcb1e951d0983ceab3 = $this->env->getExtension("native_profiler");
        $__internal_32b60faa39ea539b58476c7916f998a6cbe858799a6be6bcb1e951d0983ceab3->enter($__internal_32b60faa39ea539b58476c7916f998a6cbe858799a6be6bcb1e951d0983ceab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 28
        echo "    </head>
    <body>
        ";
        // line 30
        $this->displayBlock('topbar', $context, $blocks);
        // line 83
        echo "
        ";
        // line 84
        $this->displayBlock('sidebar', $context, $blocks);
        // line 153
        echo "
        <div class=\"wrapper\">
            <div class=\"container white-shadow\" style=\"padding-top: 10px;\">
                ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 158
            echo "                    <div class=\"alert alert-info alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>";
            // line 161
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 162
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 166
            echo "                    <div class=\"alert alert-success alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>";
            // line 169
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 170
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 174
            echo "                    <div class=\"alert alert-warning alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>";
            // line 177
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 178
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 182
            echo "                    <div class=\"alert alert-danger alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>";
            // line 185
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            // line 186
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "
                ";
        // line 189
        $this->displayBlock('body', $context, $blocks);
        // line 192
        echo "            </div>
        </div>
        ";
        // line 194
        $this->displayBlock('javascripts', $context, $blocks);
        // line 195
        echo "    </body>
</html>";
        
        $__internal_32b60faa39ea539b58476c7916f998a6cbe858799a6be6bcb1e951d0983ceab3->leave($__internal_32b60faa39ea539b58476c7916f998a6cbe858799a6be6bcb1e951d0983ceab3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a80b2f77913720efbbdf393a8c6e8d9f144556070d884dbcb3b4f5e689d7876c = $this->env->getExtension("native_profiler");
        $__internal_a80b2f77913720efbbdf393a8c6e8d9f144556070d884dbcb3b4f5e689d7876c->enter($__internal_a80b2f77913720efbbdf393a8c6e8d9f144556070d884dbcb3b4f5e689d7876c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NSZ";
        
        $__internal_a80b2f77913720efbbdf393a8c6e8d9f144556070d884dbcb3b4f5e689d7876c->leave($__internal_a80b2f77913720efbbdf393a8c6e8d9f144556070d884dbcb3b4f5e689d7876c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5cd9d745310021075a4fe83002389fcd162042a36fcb5814108131b065be1ef0 = $this->env->getExtension("native_profiler");
        $__internal_5cd9d745310021075a4fe83002389fcd162042a36fcb5814108131b065be1ef0->enter($__internal_5cd9d745310021075a4fe83002389fcd162042a36fcb5814108131b065be1ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5cd9d745310021075a4fe83002389fcd162042a36fcb5814108131b065be1ef0->leave($__internal_5cd9d745310021075a4fe83002389fcd162042a36fcb5814108131b065be1ef0_prof);

    }

    // line 16
    public function block_headscript($context, array $blocks = array())
    {
        $__internal_1fbb51b60705fa547c4edc56e68249a09f0c79fb470ada701e970c06997818ca = $this->env->getExtension("native_profiler");
        $__internal_1fbb51b60705fa547c4edc56e68249a09f0c79fb470ada701e970c06997818ca->enter($__internal_1fbb51b60705fa547c4edc56e68249a09f0c79fb470ada701e970c06997818ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headscript"));

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
            <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        // line 26
        echo "\"></script>
        ";
        
        $__internal_1fbb51b60705fa547c4edc56e68249a09f0c79fb470ada701e970c06997818ca->leave($__internal_1fbb51b60705fa547c4edc56e68249a09f0c79fb470ada701e970c06997818ca_prof);

    }

    // line 30
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_47fabefa028f4df4c05a616cf2bf840643929294a71c4676a075cc72c6872922 = $this->env->getExtension("native_profiler");
        $__internal_47fabefa028f4df4c05a616cf2bf840643929294a71c4676a075cc72c6872922->enter($__internal_47fabefa028f4df4c05a616cf2bf840643929294a71c4676a075cc72c6872922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 31
        echo "        <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <img class =\"navbar-brand\" alt=\"Brand\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoaigle.png"), "html", null, true);
        echo "\" >
                <a class=\"navbar-brand\" href=\"#\">National Security Zero</a>
                <p class=\"navbar-text\">La sécurité avant tout, mais avant apéro !</p>

            </div>
            <div id=\"navbar\" class=\"nav navbar-collapse collapse\">
                <div class=\"nav navbar-right navbar-correct\">

                    ";
        // line 47
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 48
            echo "                        <p class=\"navbar-text\">
                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute(            // line 50
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"
                               role=\"button\"><span class=\"label label-default\">";
            // line 51
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            // line 52
            echo "</span></a>

                            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 55
                echo "                                ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 56
                    echo "                                    <span class=\"label label-black\">ADMIN</span>
                                ";
                } elseif ((                // line 57
$context["role"] == "ROLE_FORMATEUR")) {
                    // line 58
                    echo "                                    <span class=\"label label-warning\">FORMATEUR</span>
                                ";
                } elseif ((                // line 59
$context["role"] == "ROLE_MODERATEUR")) {
                    // line 60
                    echo "                                    <span class=\"label label-danger\">MODERATEUR</span>
                                ";
                } elseif ((                // line 61
$context["role"] == "ROLE_RH")) {
                    // line 62
                    echo "                                    <span class=\"label label-success\">RH</span>
                                ";
                } elseif ((                // line 63
$context["role"] == "ROLE_GESTIONNAIRE")) {
                    // line 64
                    echo "                                    <span class=\"label
                                    label-primary\">GESTIONNAIRE</span>
                                ";
                }
                // line 67
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                        </p>
                        <img alt=\"Brand\" src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "salarie", array()), "img", array()))), "html", null, true);
            // line 71
            echo "\">

                    <a class=\"btn btn-default navbar-btn btn-sm\" href=\"/logout\"
                       role=\"button\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i></a>
                    ";
        } else {
            // line 76
            echo "                    <a class=\"btn btn-default navbar-btn btn-sm\" href=\"/login\"
                       role=\"button\">Login</a>
                    ";
        }
        // line 79
        echo "                </div>
            </div><!--/.nav-collapse -->
        </nav>
        ";
        
        $__internal_47fabefa028f4df4c05a616cf2bf840643929294a71c4676a075cc72c6872922->leave($__internal_47fabefa028f4df4c05a616cf2bf840643929294a71c4676a075cc72c6872922_prof);

    }

    // line 84
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fd9e253bde32341067bc1a9c4d1972c42510c51c71cd8ce8c394bb268d373073 = $this->env->getExtension("native_profiler");
        $__internal_fd9e253bde32341067bc1a9c4d1972c42510c51c71cd8ce8c394bb268d373073->enter($__internal_fd9e253bde32341067bc1a9c4d1972c42510c51c71cd8ce8c394bb268d373073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 85
        echo "            <div class=\"sidebar\">
                <div class=\"s-container\">
                    <ul>
                        <li ><a href=\"/\" class=\"menu-selected\"><i
                                        class=\"glyphicon glyphicon-home\"></i>Accueil</a></li>
                        <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"glyphicon glyphicon-education\"></i>Formations</a></li>
                        <li><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-th-list\"></i>Forum</a></li>
                        <li><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("dossiers");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-folder\"></i>Fichiers</a></li>
                        <li><a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("annuaireempty");
        echo "\"
                               class=\"menu-unselected\"><i
                                        class=\"fa
                        fa-users\"></i>Annuaire</a></li>
                        <li><a href=\"";
        // line 105
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
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbUsers", array(), "method"), "html", null, true);
        echo "</span>
                                Employés  </li>
                            <li><span class=\"label label-primary\">";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbFiles", array(), "method"), "html", null, true);
        echo "</span>
                                Documents partagés</li>
                            <li><span class=\"label label-primary\">";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbFormations", array(), "method"), "html", null, true);
        // line 121
        echo "</span>
                                Formations</li>
                            <li><span class=\"label label-primary\">";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getNbReplies", array()), "html", null, true);
        // line 124
        echo "</span>
                                 Réponses Forum</li>
                        </ul>


                    </div>
                    <div class=\"panel\">
                        <p class=\"s-title\">Top 5 des membres</p>

                        ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dbInfo"]) ? $context["dbInfo"] : $this->getContext($context, "dbInfo")), "getTop5", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 134
            echo "                        <div class=\"s-people\">
                            <img src=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "img", array()))), "html", null, true);
            echo "\"
                                 alt=\"img\">
                            <div class=\"s-people-desc\">
                                <div>
                                    <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute(            // line 140
$context["user"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["user"], "username", array())), "html", null, true);
            echo "</a>
                                    <span>(";
            // line 141
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
        // line 146
        echo "                    </div>

                    <hr>
                </div>

            </div>
        ";
        
        $__internal_fd9e253bde32341067bc1a9c4d1972c42510c51c71cd8ce8c394bb268d373073->leave($__internal_fd9e253bde32341067bc1a9c4d1972c42510c51c71cd8ce8c394bb268d373073_prof);

    }

    // line 189
    public function block_body($context, array $blocks = array())
    {
        $__internal_68bdb9706e40f9331bd95d0647b91a1056e28613dd6f8d608153f922ed7878df = $this->env->getExtension("native_profiler");
        $__internal_68bdb9706e40f9331bd95d0647b91a1056e28613dd6f8d608153f922ed7878df->enter($__internal_68bdb9706e40f9331bd95d0647b91a1056e28613dd6f8d608153f922ed7878df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 190
        echo "
                ";
        
        $__internal_68bdb9706e40f9331bd95d0647b91a1056e28613dd6f8d608153f922ed7878df->leave($__internal_68bdb9706e40f9331bd95d0647b91a1056e28613dd6f8d608153f922ed7878df_prof);

    }

    // line 194
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d3fd5055ede6d4c3e044c8b728758d5bc7e15b269f0d91c8825f3ff23245264 = $this->env->getExtension("native_profiler");
        $__internal_7d3fd5055ede6d4c3e044c8b728758d5bc7e15b269f0d91c8825f3ff23245264->enter($__internal_7d3fd5055ede6d4c3e044c8b728758d5bc7e15b269f0d91c8825f3ff23245264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d3fd5055ede6d4c3e044c8b728758d5bc7e15b269f0d91c8825f3ff23245264->leave($__internal_7d3fd5055ede6d4c3e044c8b728758d5bc7e15b269f0d91c8825f3ff23245264_prof);

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
        return array (  494 => 194,  486 => 190,  480 => 189,  467 => 146,  456 => 141,  450 => 140,  449 => 139,  442 => 135,  439 => 134,  435 => 133,  424 => 124,  422 => 123,  418 => 121,  416 => 120,  411 => 118,  406 => 116,  392 => 105,  385 => 101,  378 => 97,  371 => 93,  365 => 90,  358 => 85,  352 => 84,  342 => 79,  337 => 76,  330 => 71,  328 => 69,  325 => 68,  319 => 67,  314 => 64,  312 => 63,  309 => 62,  307 => 61,  304 => 60,  302 => 59,  299 => 58,  297 => 57,  294 => 56,  291 => 55,  287 => 54,  283 => 52,  281 => 51,  277 => 50,  276 => 49,  273 => 48,  271 => 47,  260 => 39,  250 => 31,  244 => 30,  236 => 26,  234 => 25,  231 => 24,  229 => 23,  226 => 22,  224 => 21,  221 => 20,  219 => 19,  216 => 18,  213 => 17,  207 => 16,  198 => 13,  195 => 12,  193 => 11,  189 => 10,  185 => 9,  181 => 8,  176 => 7,  170 => 6,  158 => 5,  150 => 195,  148 => 194,  144 => 192,  142 => 189,  139 => 188,  132 => 186,  130 => 185,  125 => 182,  120 => 180,  113 => 178,  111 => 177,  106 => 174,  101 => 172,  94 => 170,  92 => 169,  87 => 166,  82 => 164,  75 => 162,  73 => 161,  68 => 158,  64 => 156,  59 => 153,  57 => 84,  54 => 83,  52 => 30,  48 => 28,  46 => 16,  41 => 15,  39 => 6,  35 => 5,  29 => 1,);
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
/*             <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')*/
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
/*                             <a href="{{ path*/
/*                             ('profiluser', {'id': app.user.id}) }}"*/
/*                                role="button"><span class="label label-default">{{ app.user*/
/*                                     .username|upper }}</span></a>*/
/* */
/*                             {% for role in app.user.roles %}*/
/*                                 {% if role == "ROLE_ADMIN" %}*/
/*                                     <span class="label label-black">ADMIN</span>*/
/*                                 {% elseif role == "ROLE_FORMATEUR" %}*/
/*                                     <span class="label label-warning">FORMATEUR</span>*/
/*                                 {% elseif role == "ROLE_MODERATEUR" %}*/
/*                                     <span class="label label-danger">MODERATEUR</span>*/
/*                                 {% elseif role == "ROLE_RH" %}*/
/*                                     <span class="label label-success">RH</span>*/
/*                                 {% elseif role == "ROLE_GESTIONNAIRE" %}*/
/*                                     <span class="label*/
/*                                     label-primary">GESTIONNAIRE</span>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </p>*/
/*                         <img alt="Brand" src="{{ asset('img/users/' ~ app.user*/
/*                         .salarie.img )*/
/*                         }}">*/
/* */
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
/*                     <div class="alert alert-info alert-dismissable">*/
/*                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">*/
/*                             <span aria-hidden="true">&times;</span>*/
/*                         </button>{{ flash_message*/
/*                         }}</div>*/
/*                 {% endfor %}*/
/*                 {% for flash_message in app.session.flashbag.get*/
/*                 ('success') %}*/
/*                     <div class="alert alert-success alert-dismissable">*/
/*                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">*/
/*                             <span aria-hidden="true">&times;</span>*/
/*                         </button>{{ flash_message*/
/*                         }}</div>*/
/*                 {% endfor %}*/
/*                 {% for flash_message in app.session.flashbag.get*/
/*                 ('warning') %}*/
/*                     <div class="alert alert-warning alert-dismissable">*/
/*                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">*/
/*                             <span aria-hidden="true">&times;</span>*/
/*                         </button>{{ flash_message*/
/*                         }}</div>*/
/*                 {% endfor %}*/
/*                 {% for flash_message in app.session.flashbag.get*/
/*                 ('danger') %}*/
/*                     <div class="alert alert-danger alert-dismissable">*/
/*                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">*/
/*                             <span aria-hidden="true">&times;</span>*/
/*                         </button>{{ flash_message*/
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
