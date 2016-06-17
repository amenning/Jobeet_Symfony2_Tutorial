<?php

/* @SonataAdmin/CRUD/base_show_compare.html.twig */
class __TwigTemplate_4150491aa87a73d30ae27a6fe6376545be8e4d46f1887719fa73de73db281692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af6b8e6c207b8ca9a2fbf08d84d0d0c553788e047c75e873c967c067cc861313 = $this->env->getExtension("native_profiler");
        $__internal_af6b8e6c207b8ca9a2fbf08d84d0d0c553788e047c75e873c967c067cc861313->enter($__internal_af6b8e6c207b8ca9a2fbf08d84d0d0c553788e047c75e873c967c067cc861313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af6b8e6c207b8ca9a2fbf08d84d0d0c553788e047c75e873c967c067cc861313->leave($__internal_af6b8e6c207b8ca9a2fbf08d84d0d0c553788e047c75e873c967c067cc861313_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_5f15f94e8faafc5f826b5da853d8502d1a8d36cfe50c55737fd45f030b592b8f = $this->env->getExtension("native_profiler");
        $__internal_5f15f94e8faafc5f826b5da853d8502d1a8d36cfe50c55737fd45f030b592b8f->enter($__internal_5f15f94e8faafc5f826b5da853d8502d1a8d36cfe50c55737fd45f030b592b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_5f15f94e8faafc5f826b5da853d8502d1a8d36cfe50c55737fd45f030b592b8f->leave($__internal_5f15f94e8faafc5f826b5da853d8502d1a8d36cfe50c55737fd45f030b592b8f_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_b7aef05c1eb7121391cb2f19227c2ce2b36cfcd0d8f159c5cfb96d409661f572 = $this->env->getExtension("native_profiler");
        $__internal_b7aef05c1eb7121391cb2f19227c2ce2b36cfcd0d8f159c5cfb96d409661f572->enter($__internal_b7aef05c1eb7121391cb2f19227c2ce2b36cfcd0d8f159c5cfb96d409661f572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_b7aef05c1eb7121391cb2f19227c2ce2b36cfcd0d8f159c5cfb96d409661f572->leave($__internal_b7aef05c1eb7121391cb2f19227c2ce2b36cfcd0d8f159c5cfb96d409661f572_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
/* {% block show_title %}*/
/*     {{ admin.trans(name) }}*/
/* {% endblock %}*/
/* */
/* {% block show_field %}*/
/*     <tr class="sonata-ba-view-container history-audit-compare">*/
/*         {% if elements[field_name] is defined %}*/
/*             {{ elements[field_name]|render_view_element_compare(object, object_compare) }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
/* */
