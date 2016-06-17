<?php

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_14bd057c6fc3c631b2356a7f55c4196738c383e9a5ec229a3d46d18a3eab925b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 32);
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_394ddd5f7ea51f138893b63d6385118c0f4c194069c7688cc1c97f79d1e2013d = $this->env->getExtension("native_profiler");
        $__internal_394ddd5f7ea51f138893b63d6385118c0f4c194069c7688cc1c97f79d1e2013d->enter($__internal_394ddd5f7ea51f138893b63d6385118c0f4c194069c7688cc1c97f79d1e2013d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_394ddd5f7ea51f138893b63d6385118c0f4c194069c7688cc1c97f79d1e2013d->leave($__internal_394ddd5f7ea51f138893b63d6385118c0f4c194069c7688cc1c97f79d1e2013d_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_f15ceddfa8d62e41b5c93c364267ca29353c290578d637dec3da3eed3044d775 = $this->env->getExtension("native_profiler");
        $__internal_f15ceddfa8d62e41b5c93c364267ca29353c290578d637dec3da3eed3044d775->enter($__internal_f15ceddfa8d62e41b5c93c364267ca29353c290578d637dec3da3eed3044d775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_f15ceddfa8d62e41b5c93c364267ca29353c290578d637dec3da3eed3044d775->leave($__internal_f15ceddfa8d62e41b5c93c364267ca29353c290578d637dec3da3eed3044d775_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_f2d356ce1b26f68afb501d85f3c810c5a67f9b126590641105f96d795f43f2b0 = $this->env->getExtension("native_profiler");
        $__internal_f2d356ce1b26f68afb501d85f3c810c5a67f9b126590641105f96d795f43f2b0->enter($__internal_f2d356ce1b26f68afb501d85f3c810c5a67f9b126590641105f96d795f43f2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f2d356ce1b26f68afb501d85f3c810c5a67f9b126590641105f96d795f43f2b0->leave($__internal_f2d356ce1b26f68afb501d85f3c810c5a67f9b126590641105f96d795f43f2b0_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_052e8817af0a7da373cfec797c7493c5aaa1f4c462f4ef6c0e844c2accbffc39 = $this->env->getExtension("native_profiler");
        $__internal_052e8817af0a7da373cfec797c7493c5aaa1f4c462f4ef6c0e844c2accbffc39->enter($__internal_052e8817af0a7da373cfec797c7493c5aaa1f4c462f4ef6c0e844c2accbffc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 27)->display($context);
        
        $__internal_052e8817af0a7da373cfec797c7493c5aaa1f4c462f4ef6c0e844c2accbffc39->leave($__internal_052e8817af0a7da373cfec797c7493c5aaa1f4c462f4ef6c0e844c2accbffc39_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_23674411ee468560aa424750754977bebdfecc632d7f05c52ccae68ac02b8ad0 = $this->env->getExtension("native_profiler");
        $__internal_23674411ee468560aa424750754977bebdfecc632d7f05c52ccae68ac02b8ad0->enter($__internal_23674411ee468560aa424750754977bebdfecc632d7f05c52ccae68ac02b8ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_23674411ee468560aa424750754977bebdfecc632d7f05c52ccae68ac02b8ad0->leave($__internal_23674411ee468560aa424750754977bebdfecc632d7f05c52ccae68ac02b8ad0_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_265962db2ed63a68f411b1001cdb2d9fd1ea6ed51e456cb5600392c6338dab42 = $this->env->getExtension("native_profiler");
        $__internal_265962db2ed63a68f411b1001cdb2d9fd1ea6ed51e456cb5600392c6338dab42->enter($__internal_265962db2ed63a68f411b1001cdb2d9fd1ea6ed51e456cb5600392c6338dab42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_265962db2ed63a68f411b1001cdb2d9fd1ea6ed51e456cb5600392c6338dab42->leave($__internal_265962db2ed63a68f411b1001cdb2d9fd1ea6ed51e456cb5600392c6338dab42_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
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
