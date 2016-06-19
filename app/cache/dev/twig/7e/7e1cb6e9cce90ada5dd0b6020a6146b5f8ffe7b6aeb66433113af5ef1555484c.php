<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_4e50ee15d6a4dcbfa53edde3a4a6df1dba616cb6aa5d80ae740833dcea761f30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c83985a5591a4884bea5a43c7edb5025804261ee0050428ff04188c52e50dafd = $this->env->getExtension("native_profiler");
        $__internal_c83985a5591a4884bea5a43c7edb5025804261ee0050428ff04188c52e50dafd->enter($__internal_c83985a5591a4884bea5a43c7edb5025804261ee0050428ff04188c52e50dafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_c83985a5591a4884bea5a43c7edb5025804261ee0050428ff04188c52e50dafd->leave($__internal_c83985a5591a4884bea5a43c7edb5025804261ee0050428ff04188c52e50dafd_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_791591900d61f066f1864b20cbf58589d0855da246e0c41541396e52311e4a4c = $this->env->getExtension("native_profiler");
        $__internal_791591900d61f066f1864b20cbf58589d0855da246e0c41541396e52311e4a4c->enter($__internal_791591900d61f066f1864b20cbf58589d0855da246e0c41541396e52311e4a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_791591900d61f066f1864b20cbf58589d0855da246e0c41541396e52311e4a4c->leave($__internal_791591900d61f066f1864b20cbf58589d0855da246e0c41541396e52311e4a4c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
