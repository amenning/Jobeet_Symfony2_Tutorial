<?php

/* @SonataAdmin/CRUD/preview.html.twig */
class __TwigTemplate_3e20ed6fa2fef2ca23c3511980afd43eb902c82ed7901fc69dda71b69c703fe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "@SonataAdmin/CRUD/preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8c5c3c8819948b4ffcc4004afe693aa71975e14e9c322b25853c9af86211be4 = $this->env->getExtension("native_profiler");
        $__internal_c8c5c3c8819948b4ffcc4004afe693aa71975e14e9c322b25853c9af86211be4->enter($__internal_c8c5c3c8819948b4ffcc4004afe693aa71975e14e9c322b25853c9af86211be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8c5c3c8819948b4ffcc4004afe693aa71975e14e9c322b25853c9af86211be4->leave($__internal_c8c5c3c8819948b4ffcc4004afe693aa71975e14e9c322b25853c9af86211be4_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_91b5bbf4c55971dcd530c0112a93161ac24f729f72d08d561e618b0e54daddd5 = $this->env->getExtension("native_profiler");
        $__internal_91b5bbf4c55971dcd530c0112a93161ac24f729f72d08d561e618b0e54daddd5->enter($__internal_91b5bbf4c55971dcd530c0112a93161ac24f729f72d08d561e618b0e54daddd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_91b5bbf4c55971dcd530c0112a93161ac24f729f72d08d561e618b0e54daddd5->leave($__internal_91b5bbf4c55971dcd530c0112a93161ac24f729f72d08d561e618b0e54daddd5_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_0ff8121adff29fbfd5fc4ba0e1dba5d6a653c5584b07dab2b2df94af5481db75 = $this->env->getExtension("native_profiler");
        $__internal_0ff8121adff29fbfd5fc4ba0e1dba5d6a653c5584b07dab2b2df94af5481db75->enter($__internal_0ff8121adff29fbfd5fc4ba0e1dba5d6a653c5584b07dab2b2df94af5481db75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_0ff8121adff29fbfd5fc4ba0e1dba5d6a653c5584b07dab2b2df94af5481db75->leave($__internal_0ff8121adff29fbfd5fc4ba0e1dba5d6a653c5584b07dab2b2df94af5481db75_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_20d51f9db9d31ea93fede89e1575ccee1a1cf38404939455ce28a6751508b2cd = $this->env->getExtension("native_profiler");
        $__internal_20d51f9db9d31ea93fede89e1575ccee1a1cf38404939455ce28a6751508b2cd->enter($__internal_20d51f9db9d31ea93fede89e1575ccee1a1cf38404939455ce28a6751508b2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_20d51f9db9d31ea93fede89e1575ccee1a1cf38404939455ce28a6751508b2cd->leave($__internal_20d51f9db9d31ea93fede89e1575ccee1a1cf38404939455ce28a6751508b2cd_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_2ec98af34675d23f546e8f427fa5d2662629de458c8b10979cceda29246e9fe8 = $this->env->getExtension("native_profiler");
        $__internal_2ec98af34675d23f546e8f427fa5d2662629de458c8b10979cceda29246e9fe8->enter($__internal_2ec98af34675d23f546e8f427fa5d2662629de458c8b10979cceda29246e9fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $context["name"]), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_2ec98af34675d23f546e8f427fa5d2662629de458c8b10979cceda29246e9fe8->leave($__internal_2ec98af34675d23f546e8f427fa5d2662629de458c8b10979cceda29246e9fe8_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_60ecf5642cf4ce0af8ee56852da0a81cd35b2b080b6299e5214eb4169268990d = $this->env->getExtension("native_profiler");
        $__internal_60ecf5642cf4ce0af8ee56852da0a81cd35b2b080b6299e5214eb4169268990d->enter($__internal_60ecf5642cf4ce0af8ee56852da0a81cd35b2b080b6299e5214eb4169268990d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_60ecf5642cf4ce0af8ee56852da0a81cd35b2b080b6299e5214eb4169268990d->leave($__internal_60ecf5642cf4ce0af8ee56852da0a81cd35b2b080b6299e5214eb4169268990d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}*/
/* */
/* {% block actions %}*/
/* {% endblock %}*/
/* */
/* {% block side_menu %}*/
/* {% endblock %}*/
/* */
/* {% block formactions %}*/
/*     <button class="btn btn-success" type="submit" name="btn_preview_approve">*/
/*         <i class="fa fa-check"></i>*/
/*         {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}*/
/*     </button>*/
/*     <button class="btn btn-danger" type="submit" name="btn_preview_decline">*/
/*         <i class="fa fa-times"></i>*/
/*         {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}*/
/*     </button>*/
/* {% endblock %}*/
/* */
/* {% block preview %}*/
/*     <div class="sonata-ba-view">*/
/*         {% for name, view_group in admin.showgroups %}*/
/*             <table class="table table-bordered">*/
/*                 {% if name %}*/
/*                     <tr class="sonata-ba-view-title">*/
/*                         <td colspan="2">*/
/*                             {{ admin.trans(name) }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endif %}*/
/* */
/*                 {% for field_name in view_group.fields %}*/
/*                     <tr class="sonata-ba-view-container">*/
/*                         {% if admin.show[field_name] is defined %}*/
/*                             {{ admin.show[field_name]|render_view_element(object) }}*/
/*                         {% endif %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form %}*/
/*     <div class="sonata-preview-form-container">*/
/*         {{ parent() }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
