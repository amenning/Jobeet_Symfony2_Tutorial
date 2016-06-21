<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_ea911da4c3489b07d489b2eb5e60e70de13c25d0962dce0dbdc462ece0582dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20b4d4e5ad19743e65bdef3f9fbdf587f041873520b099310799a8b4e2adc659 = $this->env->getExtension("native_profiler");
        $__internal_20b4d4e5ad19743e65bdef3f9fbdf587f041873520b099310799a8b4e2adc659->enter($__internal_20b4d4e5ad19743e65bdef3f9fbdf587f041873520b099310799a8b4e2adc659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20b4d4e5ad19743e65bdef3f9fbdf587f041873520b099310799a8b4e2adc659->leave($__internal_20b4d4e5ad19743e65bdef3f9fbdf587f041873520b099310799a8b4e2adc659_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b725ce0d23e2e8e77114d0741aa086b59131bc2c5a4867d75ac6be45dd2d144f = $this->env->getExtension("native_profiler");
        $__internal_b725ce0d23e2e8e77114d0741aa086b59131bc2c5a4867d75ac6be45dd2d144f->enter($__internal_b725ce0d23e2e8e77114d0741aa086b59131bc2c5a4867d75ac6be45dd2d144f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_b725ce0d23e2e8e77114d0741aa086b59131bc2c5a4867d75ac6be45dd2d144f->leave($__internal_b725ce0d23e2e8e77114d0741aa086b59131bc2c5a4867d75ac6be45dd2d144f_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */
