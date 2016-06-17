<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_a6a341c7aa13bba80f02ace27ea4efe942b6ddcb267516856ed2670aae25b442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07992642ec74ff8e12f16a6a7d9e3779cd95b1ba84ef30ac4316ee39108723ef = $this->env->getExtension("native_profiler");
        $__internal_07992642ec74ff8e12f16a6a7d9e3779cd95b1ba84ef30ac4316ee39108723ef->enter($__internal_07992642ec74ff8e12f16a6a7d9e3779cd95b1ba84ef30ac4316ee39108723ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07992642ec74ff8e12f16a6a7d9e3779cd95b1ba84ef30ac4316ee39108723ef->leave($__internal_07992642ec74ff8e12f16a6a7d9e3779cd95b1ba84ef30ac4316ee39108723ef_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_541bde6b8c215cd0c2e106c4ce4ebbcfd3868b14dd442d8fe07d10edc81738ed = $this->env->getExtension("native_profiler");
        $__internal_541bde6b8c215cd0c2e106c4ce4ebbcfd3868b14dd442d8fe07d10edc81738ed->enter($__internal_541bde6b8c215cd0c2e106c4ce4ebbcfd3868b14dd442d8fe07d10edc81738ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_541bde6b8c215cd0c2e106c4ce4ebbcfd3868b14dd442d8fe07d10edc81738ed->leave($__internal_541bde6b8c215cd0c2e106c4ce4ebbcfd3868b14dd442d8fe07d10edc81738ed_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_7546556ec625ba3048db5f61afac03f7972c4dbfb5dcc03618d75f86a0d4e373 = $this->env->getExtension("native_profiler");
        $__internal_7546556ec625ba3048db5f61afac03f7972c4dbfb5dcc03618d75f86a0d4e373->enter($__internal_7546556ec625ba3048db5f61afac03f7972c4dbfb5dcc03618d75f86a0d4e373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_7546556ec625ba3048db5f61afac03f7972c4dbfb5dcc03618d75f86a0d4e373->leave($__internal_7546556ec625ba3048db5f61afac03f7972c4dbfb5dcc03618d75f86a0d4e373_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_5cc9b5c3fbd6db9397dd15f922034b545301f3ef5bce1095f8d017900b0ef7cc = $this->env->getExtension("native_profiler");
        $__internal_5cc9b5c3fbd6db9397dd15f922034b545301f3ef5bce1095f8d017900b0ef7cc->enter($__internal_5cc9b5c3fbd6db9397dd15f922034b545301f3ef5bce1095f8d017900b0ef7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_5cc9b5c3fbd6db9397dd15f922034b545301f3ef5bce1095f8d017900b0ef7cc->leave($__internal_5cc9b5c3fbd6db9397dd15f922034b545301f3ef5bce1095f8d017900b0ef7cc_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
