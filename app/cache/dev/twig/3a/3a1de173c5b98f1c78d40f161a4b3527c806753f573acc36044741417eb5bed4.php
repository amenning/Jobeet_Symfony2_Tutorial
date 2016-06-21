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
        $__internal_93692a42047a666fb039102d0fd57bbbff7b2413b5f6f66dca0e856f43cfd245 = $this->env->getExtension("native_profiler");
        $__internal_93692a42047a666fb039102d0fd57bbbff7b2413b5f6f66dca0e856f43cfd245->enter($__internal_93692a42047a666fb039102d0fd57bbbff7b2413b5f6f66dca0e856f43cfd245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93692a42047a666fb039102d0fd57bbbff7b2413b5f6f66dca0e856f43cfd245->leave($__internal_93692a42047a666fb039102d0fd57bbbff7b2413b5f6f66dca0e856f43cfd245_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_030399440fc16015716d51cc41f6c97b87880ebcb7fbb714cef0995d2b0f5247 = $this->env->getExtension("native_profiler");
        $__internal_030399440fc16015716d51cc41f6c97b87880ebcb7fbb714cef0995d2b0f5247->enter($__internal_030399440fc16015716d51cc41f6c97b87880ebcb7fbb714cef0995d2b0f5247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_030399440fc16015716d51cc41f6c97b87880ebcb7fbb714cef0995d2b0f5247->leave($__internal_030399440fc16015716d51cc41f6c97b87880ebcb7fbb714cef0995d2b0f5247_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_ea6572b045f9611457df4592a1cda04f1cb145a7c07391fc9c282d6406ab333f = $this->env->getExtension("native_profiler");
        $__internal_ea6572b045f9611457df4592a1cda04f1cb145a7c07391fc9c282d6406ab333f->enter($__internal_ea6572b045f9611457df4592a1cda04f1cb145a7c07391fc9c282d6406ab333f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_ea6572b045f9611457df4592a1cda04f1cb145a7c07391fc9c282d6406ab333f->leave($__internal_ea6572b045f9611457df4592a1cda04f1cb145a7c07391fc9c282d6406ab333f_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_22642a04e3068bcf1e0ab727fe97f5c12c43e56ef1ef14074edb84f7180d9d8c = $this->env->getExtension("native_profiler");
        $__internal_22642a04e3068bcf1e0ab727fe97f5c12c43e56ef1ef14074edb84f7180d9d8c->enter($__internal_22642a04e3068bcf1e0ab727fe97f5c12c43e56ef1ef14074edb84f7180d9d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_22642a04e3068bcf1e0ab727fe97f5c12c43e56ef1ef14074edb84f7180d9d8c->leave($__internal_22642a04e3068bcf1e0ab727fe97f5c12c43e56ef1ef14074edb84f7180d9d8c_prof);

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
