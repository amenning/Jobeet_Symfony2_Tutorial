<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_6b9e6eb4d85c9009a24212951a1f795100f47db53e2023517cfb61ebbaa5c431 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_320bd33fbe9ca40bd80d4810f62719d8eb002e9461ad0e718a2fe7a66c3b41b5 = $this->env->getExtension("native_profiler");
        $__internal_320bd33fbe9ca40bd80d4810f62719d8eb002e9461ad0e718a2fe7a66c3b41b5->enter($__internal_320bd33fbe9ca40bd80d4810f62719d8eb002e9461ad0e718a2fe7a66c3b41b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_320bd33fbe9ca40bd80d4810f62719d8eb002e9461ad0e718a2fe7a66c3b41b5->leave($__internal_320bd33fbe9ca40bd80d4810f62719d8eb002e9461ad0e718a2fe7a66c3b41b5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fd86f2d141bdefc485b5f2b1282cced348efdff9db36b1cda3cfad25b0a3f7ce = $this->env->getExtension("native_profiler");
        $__internal_fd86f2d141bdefc485b5f2b1282cced348efdff9db36b1cda3cfad25b0a3f7ce->enter($__internal_fd86f2d141bdefc485b5f2b1282cced348efdff9db36b1cda3cfad25b0a3f7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_fd86f2d141bdefc485b5f2b1282cced348efdff9db36b1cda3cfad25b0a3f7ce->leave($__internal_fd86f2d141bdefc485b5f2b1282cced348efdff9db36b1cda3cfad25b0a3f7ce_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
