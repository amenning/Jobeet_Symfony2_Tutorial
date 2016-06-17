<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_cc59aa215e4b753c216f9c9f08d0e8e1880f57bb3b2664ac6f041bdec25da234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69baee5225acf3d5130f06b0973609ac8b03b94531fa151a24e3959b9b39f2cb = $this->env->getExtension("native_profiler");
        $__internal_69baee5225acf3d5130f06b0973609ac8b03b94531fa151a24e3959b9b39f2cb->enter($__internal_69baee5225acf3d5130f06b0973609ac8b03b94531fa151a24e3959b9b39f2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69baee5225acf3d5130f06b0973609ac8b03b94531fa151a24e3959b9b39f2cb->leave($__internal_69baee5225acf3d5130f06b0973609ac8b03b94531fa151a24e3959b9b39f2cb_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_c47fee1eda2f81d6de62abb071ce355fe180a107922813b3fc303aaf4ec58be9 = $this->env->getExtension("native_profiler");
        $__internal_c47fee1eda2f81d6de62abb071ce355fe180a107922813b3fc303aaf4ec58be9->enter($__internal_c47fee1eda2f81d6de62abb071ce355fe180a107922813b3fc303aaf4ec58be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_c47fee1eda2f81d6de62abb071ce355fe180a107922813b3fc303aaf4ec58be9->leave($__internal_c47fee1eda2f81d6de62abb071ce355fe180a107922813b3fc303aaf4ec58be9_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_6df46bb437af4d2deac257039e41e7cfec82772e4f7af4db4a9f600d29c6ef43 = $this->env->getExtension("native_profiler");
        $__internal_6df46bb437af4d2deac257039e41e7cfec82772e4f7af4db4a9f600d29c6ef43->enter($__internal_6df46bb437af4d2deac257039e41e7cfec82772e4f7af4db4a9f600d29c6ef43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6df46bb437af4d2deac257039e41e7cfec82772e4f7af4db4a9f600d29c6ef43->leave($__internal_6df46bb437af4d2deac257039e41e7cfec82772e4f7af4db4a9f600d29c6ef43_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_dfcf9e7875fd718a0f95e083fcea35739602edf5dc76caeb0e629667e2713d1f = $this->env->getExtension("native_profiler");
        $__internal_dfcf9e7875fd718a0f95e083fcea35739602edf5dc76caeb0e629667e2713d1f->enter($__internal_dfcf9e7875fd718a0f95e083fcea35739602edf5dc76caeb0e629667e2713d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_dfcf9e7875fd718a0f95e083fcea35739602edf5dc76caeb0e629667e2713d1f->leave($__internal_dfcf9e7875fd718a0f95e083fcea35739602edf5dc76caeb0e629667e2713d1f_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_bc6d1108b5c4156e9be2d80f7376c23f154f948e2a3ec3db48b1fee7506113d0 = $this->env->getExtension("native_profiler");
        $__internal_bc6d1108b5c4156e9be2d80f7376c23f154f948e2a3ec3db48b1fee7506113d0->enter($__internal_bc6d1108b5c4156e9be2d80f7376c23f154f948e2a3ec3db48b1fee7506113d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_bc6d1108b5c4156e9be2d80f7376c23f154f948e2a3ec3db48b1fee7506113d0->leave($__internal_bc6d1108b5c4156e9be2d80f7376c23f154f948e2a3ec3db48b1fee7506113d0_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_2e58c24d8816f5ca80642c8274f0f4e7dd3d18f70d615c5a5eb54c59b137dbcb = $this->env->getExtension("native_profiler");
        $__internal_2e58c24d8816f5ca80642c8274f0f4e7dd3d18f70d615c5a5eb54c59b137dbcb->enter($__internal_2e58c24d8816f5ca80642c8274f0f4e7dd3d18f70d615c5a5eb54c59b137dbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_2e58c24d8816f5ca80642c8274f0f4e7dd3d18f70d615c5a5eb54c59b137dbcb->leave($__internal_2e58c24d8816f5ca80642c8274f0f4e7dd3d18f70d615c5a5eb54c59b137dbcb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  126 => 35,  114 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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
/* {% block title %}*/
/*     {% if admin.id(object) is not null %}*/
/*         {{ "title_edit"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}*/
/*     {% else %}*/
/*         {{ "title_create"|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block navbar_title %}*/
/*     {{ block('title') }}*/
/* {% endblock %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}*/
/* {% import "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig" as form_helper %}*/
/* */
/* {% block form %}*/
/*     {{ block('parentForm') }}*/
/* {% endblock %}*/
/* */
