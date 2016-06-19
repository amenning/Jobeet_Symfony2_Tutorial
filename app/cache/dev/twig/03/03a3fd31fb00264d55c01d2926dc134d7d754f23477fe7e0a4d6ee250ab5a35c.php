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
        $__internal_35d0bfc600ea19f7c2a9757d8820e88b113b96a83ce0321ec83e28dbf2158b04 = $this->env->getExtension("native_profiler");
        $__internal_35d0bfc600ea19f7c2a9757d8820e88b113b96a83ce0321ec83e28dbf2158b04->enter($__internal_35d0bfc600ea19f7c2a9757d8820e88b113b96a83ce0321ec83e28dbf2158b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35d0bfc600ea19f7c2a9757d8820e88b113b96a83ce0321ec83e28dbf2158b04->leave($__internal_35d0bfc600ea19f7c2a9757d8820e88b113b96a83ce0321ec83e28dbf2158b04_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e9184e7693277906060301e0eaa896ccc1ded05009656672e280ba1083474e4d = $this->env->getExtension("native_profiler");
        $__internal_e9184e7693277906060301e0eaa896ccc1ded05009656672e280ba1083474e4d->enter($__internal_e9184e7693277906060301e0eaa896ccc1ded05009656672e280ba1083474e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_e9184e7693277906060301e0eaa896ccc1ded05009656672e280ba1083474e4d->leave($__internal_e9184e7693277906060301e0eaa896ccc1ded05009656672e280ba1083474e4d_prof);

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
