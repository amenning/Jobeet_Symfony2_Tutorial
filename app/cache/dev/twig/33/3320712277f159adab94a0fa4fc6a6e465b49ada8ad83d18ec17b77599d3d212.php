<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_bc04c1da3f17194f92c61476b29700c646a95a747120e7b54ac70fce5ee991c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
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
        $__internal_5d64cd3add89d2cd692d0a81dfa163a4aab6d807f32e0eac8efe8fedd9df5ca2 = $this->env->getExtension("native_profiler");
        $__internal_5d64cd3add89d2cd692d0a81dfa163a4aab6d807f32e0eac8efe8fedd9df5ca2->enter($__internal_5d64cd3add89d2cd692d0a81dfa163a4aab6d807f32e0eac8efe8fedd9df5ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d64cd3add89d2cd692d0a81dfa163a4aab6d807f32e0eac8efe8fedd9df5ca2->leave($__internal_5d64cd3add89d2cd692d0a81dfa163a4aab6d807f32e0eac8efe8fedd9df5ca2_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_241f492c87243c1a595e5276e6c91afb046e2e6c6fae64459f4dfbd85b2cde60 = $this->env->getExtension("native_profiler");
        $__internal_241f492c87243c1a595e5276e6c91afb046e2e6c6fae64459f4dfbd85b2cde60->enter($__internal_241f492c87243c1a595e5276e6c91afb046e2e6c6fae64459f4dfbd85b2cde60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_241f492c87243c1a595e5276e6c91afb046e2e6c6fae64459f4dfbd85b2cde60->leave($__internal_241f492c87243c1a595e5276e6c91afb046e2e6c6fae64459f4dfbd85b2cde60_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_623374f4f87574261a402c89c3145ce392d3d5a4ecb6d3bcaaf6298257e1ae2b = $this->env->getExtension("native_profiler");
        $__internal_623374f4f87574261a402c89c3145ce392d3d5a4ecb6d3bcaaf6298257e1ae2b->enter($__internal_623374f4f87574261a402c89c3145ce392d3d5a4ecb6d3bcaaf6298257e1ae2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_623374f4f87574261a402c89c3145ce392d3d5a4ecb6d3bcaaf6298257e1ae2b->leave($__internal_623374f4f87574261a402c89c3145ce392d3d5a4ecb6d3bcaaf6298257e1ae2b_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_2f43ed6a6609766a89ac7df0bd589eb1ff57baeebf5e2b8356dfa8499a17ab6b = $this->env->getExtension("native_profiler");
        $__internal_2f43ed6a6609766a89ac7df0bd589eb1ff57baeebf5e2b8356dfa8499a17ab6b->enter($__internal_2f43ed6a6609766a89ac7df0bd589eb1ff57baeebf5e2b8356dfa8499a17ab6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

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
        
        $__internal_2f43ed6a6609766a89ac7df0bd589eb1ff57baeebf5e2b8356dfa8499a17ab6b->leave($__internal_2f43ed6a6609766a89ac7df0bd589eb1ff57baeebf5e2b8356dfa8499a17ab6b_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_ba7f9c61a8768b23642223f273cb230bfb9de8d73af0d4ee283e56101f533ad6 = $this->env->getExtension("native_profiler");
        $__internal_ba7f9c61a8768b23642223f273cb230bfb9de8d73af0d4ee283e56101f533ad6->enter($__internal_ba7f9c61a8768b23642223f273cb230bfb9de8d73af0d4ee283e56101f533ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

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
        
        $__internal_ba7f9c61a8768b23642223f273cb230bfb9de8d73af0d4ee283e56101f533ad6->leave($__internal_ba7f9c61a8768b23642223f273cb230bfb9de8d73af0d4ee283e56101f533ad6_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_85564a03849cfb5cff4373795b9568b9b8e038653e6eb7a836ed6e01eda6c706 = $this->env->getExtension("native_profiler");
        $__internal_85564a03849cfb5cff4373795b9568b9b8e038653e6eb7a836ed6e01eda6c706->enter($__internal_85564a03849cfb5cff4373795b9568b9b8e038653e6eb7a836ed6e01eda6c706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_85564a03849cfb5cff4373795b9568b9b8e038653e6eb7a836ed6e01eda6c706->leave($__internal_85564a03849cfb5cff4373795b9568b9b8e038653e6eb7a836ed6e01eda6c706_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
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
