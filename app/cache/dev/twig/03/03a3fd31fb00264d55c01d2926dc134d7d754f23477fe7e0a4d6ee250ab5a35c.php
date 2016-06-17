<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_0a4d6480741dd0ad8fde4fa59b310775cc92beb275da7540006ef4125fa1b60f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83f8639ba5872d9252e40e5b54d52dfb8afccebafbe163a7abfcaa251c0deef3 = $this->env->getExtension("native_profiler");
        $__internal_83f8639ba5872d9252e40e5b54d52dfb8afccebafbe163a7abfcaa251c0deef3->enter($__internal_83f8639ba5872d9252e40e5b54d52dfb8afccebafbe163a7abfcaa251c0deef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83f8639ba5872d9252e40e5b54d52dfb8afccebafbe163a7abfcaa251c0deef3->leave($__internal_83f8639ba5872d9252e40e5b54d52dfb8afccebafbe163a7abfcaa251c0deef3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f5182a87ca584f37292272e09a57ca4456aa29e076e634dba13de0f8f89b1061 = $this->env->getExtension("native_profiler");
        $__internal_f5182a87ca584f37292272e09a57ca4456aa29e076e634dba13de0f8f89b1061->enter($__internal_f5182a87ca584f37292272e09a57ca4456aa29e076e634dba13de0f8f89b1061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_f5182a87ca584f37292272e09a57ca4456aa29e076e634dba13de0f8f89b1061->leave($__internal_f5182a87ca584f37292272e09a57ca4456aa29e076e634dba13de0f8f89b1061_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <a class="btn btn-primary" href="{{ admin.generateUrl('list') }}">*/
/*         <i class="fa fa-check"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
