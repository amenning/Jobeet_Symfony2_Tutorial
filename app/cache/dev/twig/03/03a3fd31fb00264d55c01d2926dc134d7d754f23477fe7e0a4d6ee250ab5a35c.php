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
        $__internal_c4682bd1cab9440db324afcf4b177ee239bb372e6b50b40e8edd6ec7c9b24e12 = $this->env->getExtension("native_profiler");
        $__internal_c4682bd1cab9440db324afcf4b177ee239bb372e6b50b40e8edd6ec7c9b24e12->enter($__internal_c4682bd1cab9440db324afcf4b177ee239bb372e6b50b40e8edd6ec7c9b24e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4682bd1cab9440db324afcf4b177ee239bb372e6b50b40e8edd6ec7c9b24e12->leave($__internal_c4682bd1cab9440db324afcf4b177ee239bb372e6b50b40e8edd6ec7c9b24e12_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f0072f8dfa7b7c0204e5a3bbefceb503c6076f86a6e33d1dd6c50ad173af90ad = $this->env->getExtension("native_profiler");
        $__internal_f0072f8dfa7b7c0204e5a3bbefceb503c6076f86a6e33d1dd6c50ad173af90ad->enter($__internal_f0072f8dfa7b7c0204e5a3bbefceb503c6076f86a6e33d1dd6c50ad173af90ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_f0072f8dfa7b7c0204e5a3bbefceb503c6076f86a6e33d1dd6c50ad173af90ad->leave($__internal_f0072f8dfa7b7c0204e5a3bbefceb503c6076f86a6e33d1dd6c50ad173af90ad_prof);

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
