<?php

/* EnsJobeetBundle:Category:show.atom.twig */
class __TwigTemplate_6db623eefe56ce02afcb249cb596514015a3f401c07747495e95ebcb639b880c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f9882f1ab65cf5e64e614987015c8fdd1eaafcc14ee29135fa529b13daffbe6 = $this->env->getExtension("native_profiler");
        $__internal_9f9882f1ab65cf5e64e614987015c8fdd1eaafcc14ee29135fa529b13daffbe6->enter($__internal_9f9882f1ab65cf5e64e614987015c8fdd1eaafcc14ee29135fa529b13daffbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Category:show.atom.twig"));

        // line 1
        echo "<!-- src/Ens/JobeetBundle/Resources/views/Category/show.atom.twig -->
<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
  <title>Jobeet (";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo ")</title>
  <subtitle>Latest Jobs</subtitle>
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_jobeet_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "_format" => "atom")), "html", null, true);
        echo "\" rel=\"self\" />
  <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_jobeet_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()))), "html", null, true);
        echo "\" />
  <updated>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()), 0, array(), "array"), "createdAt", array()), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
        echo "</updated>
  <author><name>Jobeet</name></author>
  <id>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["feedId"]) ? $context["feedId"] : $this->getContext($context, "feedId")), "html", null, true);
        echo "</id>
 
  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 13
            echo "    <entry>
      <title>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo ")</title>
      <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
            echo "\" />
      <id>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</id>
      <updated>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "createdAt", array()), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
            echo "</updated>
      <summary type=\"xhtml\">
        <div xmlns=\"http://www.w3.org/1999/xhtml\">
          ";
            // line 20
            if ($this->getAttribute($context["entity"], "logo", array())) {
                // line 21
                echo "            <div>
              <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "url", array()), "html", null, true);
                echo "\">
                <img src=\"http://";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "host", array()), "html", null, true);
                echo "/uploads/jobs/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "logo", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
                echo " logo\" />
              </a>
            </div>
          ";
            }
            // line 27
            echo "          <div>
            ";
            // line 28
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true));
            echo "
          </div>
          <h4>How to apply?</h4>
          <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "howtoapply", array()), "html", null, true);
            echo "</p>
        </div>
      </summary>
      <author><name>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
            echo "</name></author>
    </entry>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</feed>";
        
        $__internal_9f9882f1ab65cf5e64e614987015c8fdd1eaafcc14ee29135fa529b13daffbe6->leave($__internal_9f9882f1ab65cf5e64e614987015c8fdd1eaafcc14ee29135fa529b13daffbe6_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Category:show.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  112 => 34,  106 => 31,  100 => 28,  97 => 27,  86 => 23,  82 => 22,  79 => 21,  77 => 20,  71 => 17,  67 => 16,  63 => 15,  57 => 14,  54 => 13,  50 => 12,  45 => 10,  40 => 8,  36 => 7,  32 => 6,  27 => 4,  22 => 1,);
    }
}
/* <!-- src/Ens/JobeetBundle/Resources/views/Category/show.atom.twig -->*/
/* <?xml version="1.0" encoding="utf-8"?>*/
/* <feed xmlns="http://www.w3.org/2005/Atom">*/
/*   <title>Jobeet ({{ category.name }})</title>*/
/*   <subtitle>Latest Jobs</subtitle>*/
/*   <link href="{{ url('ens_jobeet_category', { 'slug': category.slug, '_format': 'atom' }) }}" rel="self" />*/
/*   <link href="{{ url('ens_jobeet_category', { 'slug': category.slug }) }}" />*/
/*   <updated>{{ category.activejobs[0].createdAt.format(constant('DATE_ATOM')) }}</updated>*/
/*   <author><name>Jobeet</name></author>*/
/*   <id>{{ feedId }}</id>*/
/*  */
/*   {% for entity in category.activejobs %}*/
/*     <entry>*/
/*       <title>{{ entity.position }} ({{ entity.location }})</title>*/
/*       <link href="{{ url('ens_job_show', { 'id': entity.id, 'company': entity.companyslug, 'location': entity.locationslug, 'position': entity.positionslug }) }}" />*/
/*       <id>{{ entity.id }}</id>*/
/*       <updated>{{ entity.createdAt.format(constant('DATE_ATOM')) }}</updated>*/
/*       <summary type="xhtml">*/
/*         <div xmlns="http://www.w3.org/1999/xhtml">*/
/*           {% if entity.logo %}*/
/*             <div>*/
/*               <a href="{{ entity.url }}">*/
/*                 <img src="http://{{ app.request.host }}/uploads/jobs/{{ entity.logo }}" alt="{{ entity.company }} logo" />*/
/*               </a>*/
/*             </div>*/
/*           {% endif %}*/
/*           <div>*/
/*             {{ entity.description|nl2br }}*/
/*           </div>*/
/*           <h4>How to apply?</h4>*/
/*           <p>{{ entity.howtoapply }}</p>*/
/*         </div>*/
/*       </summary>*/
/*       <author><name>{{ entity.company }}</name></author>*/
/*     </entry>*/
/*   {% endfor %}*/
/* </feed>*/
