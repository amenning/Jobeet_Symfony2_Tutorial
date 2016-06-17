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
        $__internal_ef0cded402d4ea07d9a52e8d88a522f423c232bbdeee49351f5847c0799840c1 = $this->env->getExtension("native_profiler");
        $__internal_ef0cded402d4ea07d9a52e8d88a522f423c232bbdeee49351f5847c0799840c1->enter($__internal_ef0cded402d4ea07d9a52e8d88a522f423c232bbdeee49351f5847c0799840c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef0cded402d4ea07d9a52e8d88a522f423c232bbdeee49351f5847c0799840c1->leave($__internal_ef0cded402d4ea07d9a52e8d88a522f423c232bbdeee49351f5847c0799840c1_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_74acc47e2ad2fedf055043c1a831fba368915ff1c04923eae25a1578f57787ae = $this->env->getExtension("native_profiler");
        $__internal_74acc47e2ad2fedf055043c1a831fba368915ff1c04923eae25a1578f57787ae->enter($__internal_74acc47e2ad2fedf055043c1a831fba368915ff1c04923eae25a1578f57787ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_74acc47e2ad2fedf055043c1a831fba368915ff1c04923eae25a1578f57787ae->leave($__internal_74acc47e2ad2fedf055043c1a831fba368915ff1c04923eae25a1578f57787ae_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_b22e1277feb39b350cd082b8a205e614900a633347773b1229a908c67722c302 = $this->env->getExtension("native_profiler");
        $__internal_b22e1277feb39b350cd082b8a205e614900a633347773b1229a908c67722c302->enter($__internal_b22e1277feb39b350cd082b8a205e614900a633347773b1229a908c67722c302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b22e1277feb39b350cd082b8a205e614900a633347773b1229a908c67722c302->leave($__internal_b22e1277feb39b350cd082b8a205e614900a633347773b1229a908c67722c302_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d52d684fcc802d8357705a346d8f0d720437fd2394e5c7312a3e7d0ed4d8739a = $this->env->getExtension("native_profiler");
        $__internal_d52d684fcc802d8357705a346d8f0d720437fd2394e5c7312a3e7d0ed4d8739a->enter($__internal_d52d684fcc802d8357705a346d8f0d720437fd2394e5c7312a3e7d0ed4d8739a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_d52d684fcc802d8357705a346d8f0d720437fd2394e5c7312a3e7d0ed4d8739a->leave($__internal_d52d684fcc802d8357705a346d8f0d720437fd2394e5c7312a3e7d0ed4d8739a_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_c77a069d62b6dabf026885bba79cebfd784d03eac57be3cd8261db1352d5c94a = $this->env->getExtension("native_profiler");
        $__internal_c77a069d62b6dabf026885bba79cebfd784d03eac57be3cd8261db1352d5c94a->enter($__internal_c77a069d62b6dabf026885bba79cebfd784d03eac57be3cd8261db1352d5c94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_c77a069d62b6dabf026885bba79cebfd784d03eac57be3cd8261db1352d5c94a->leave($__internal_c77a069d62b6dabf026885bba79cebfd784d03eac57be3cd8261db1352d5c94a_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_90e3832d6cdc891508aeab2b7a2af9f664fb863245c2ed84b69c2fe56d923787 = $this->env->getExtension("native_profiler");
        $__internal_90e3832d6cdc891508aeab2b7a2af9f664fb863245c2ed84b69c2fe56d923787->enter($__internal_90e3832d6cdc891508aeab2b7a2af9f664fb863245c2ed84b69c2fe56d923787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_90e3832d6cdc891508aeab2b7a2af9f664fb863245c2ed84b69c2fe56d923787->leave($__internal_90e3832d6cdc891508aeab2b7a2af9f664fb863245c2ed84b69c2fe56d923787_prof);

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
