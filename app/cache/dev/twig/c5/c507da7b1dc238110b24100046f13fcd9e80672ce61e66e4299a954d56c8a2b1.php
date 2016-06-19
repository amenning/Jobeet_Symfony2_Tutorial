<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_2791caa51b0d490b9d77346d1fc3cfe74cb9e3429d6e3716a72f11b7877f30d9 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c67d7a8dee6b24f9dda19d5636c1eba433b32bd53c6c602bff78f8895bdd39e3 = $this->env->getExtension("native_profiler");
        $__internal_c67d7a8dee6b24f9dda19d5636c1eba433b32bd53c6c602bff78f8895bdd39e3->enter($__internal_c67d7a8dee6b24f9dda19d5636c1eba433b32bd53c6c602bff78f8895bdd39e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c67d7a8dee6b24f9dda19d5636c1eba433b32bd53c6c602bff78f8895bdd39e3->leave($__internal_c67d7a8dee6b24f9dda19d5636c1eba433b32bd53c6c602bff78f8895bdd39e3_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_04917e57c2d0faef1a548ad72fa418957f8c72c13357a3fc3f0219c2a33938b5 = $this->env->getExtension("native_profiler");
        $__internal_04917e57c2d0faef1a548ad72fa418957f8c72c13357a3fc3f0219c2a33938b5->enter($__internal_04917e57c2d0faef1a548ad72fa418957f8c72c13357a3fc3f0219c2a33938b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_04917e57c2d0faef1a548ad72fa418957f8c72c13357a3fc3f0219c2a33938b5->leave($__internal_04917e57c2d0faef1a548ad72fa418957f8c72c13357a3fc3f0219c2a33938b5_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_22ac1139e548eba24c03cd464dd2a8bce0923f3f85df0c181a2f2061c9ab2856 = $this->env->getExtension("native_profiler");
        $__internal_22ac1139e548eba24c03cd464dd2a8bce0923f3f85df0c181a2f2061c9ab2856->enter($__internal_22ac1139e548eba24c03cd464dd2a8bce0923f3f85df0c181a2f2061c9ab2856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_22ac1139e548eba24c03cd464dd2a8bce0923f3f85df0c181a2f2061c9ab2856->leave($__internal_22ac1139e548eba24c03cd464dd2a8bce0923f3f85df0c181a2f2061c9ab2856_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_4ccbe38d4ed4356e4182eaadfdf48cf7d0ff8bb2c1e5c6b0b2c290b216c0213f = $this->env->getExtension("native_profiler");
        $__internal_4ccbe38d4ed4356e4182eaadfdf48cf7d0ff8bb2c1e5c6b0b2c290b216c0213f->enter($__internal_4ccbe38d4ed4356e4182eaadfdf48cf7d0ff8bb2c1e5c6b0b2c290b216c0213f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_4ccbe38d4ed4356e4182eaadfdf48cf7d0ff8bb2c1e5c6b0b2c290b216c0213f->leave($__internal_4ccbe38d4ed4356e4182eaadfdf48cf7d0ff8bb2c1e5c6b0b2c290b216c0213f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
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
